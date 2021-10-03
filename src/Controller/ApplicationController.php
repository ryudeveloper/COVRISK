<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Event\EventInterface;
use Cake\Http\Client\FormData;
use Cake\Http\Client;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Collection\Collection;
use Cake\ORM\TableRegistry;

/**
 * Application Controller
 *
 * @property \App\Model\Table\ApplicationTable $Application
 * @method \App\Model\Entity\Application[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ApplicationController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->loadModel('GeoStates');
    }
    public function beforeFilter(EventInterface $event)
    {
        parent::beforeFilter($event);
    }

    public function covrisk()
    {
        $http = new Client();
        $responseStates = $http->get('https://api.covidtracking.com/v2/states.json');

        $arrayStates = $responseStates->getJson()['data'];

        $statesLists = [];

        foreach ($arrayStates as $state) {
            $statesLists[$state['state_code']] = $state['name'];
        }
        $daily = [];
        $state = null;
        $geoState = null;
        if ($this->request->getData('states')) {
            $responseDaily = $http->get("https://api.covidtracking.com/v2/states/{$this->request->getData('states')}/daily.json");
            $daily = $responseDaily->getJson()['data'];
            $collection = new Collection($arrayStates);
            $state = $collection->firstMatch([
                'state_code' => $this->request->getData('states'),
            ]);
            $geoState = $this->GeoStates->find('all')->where([
                'abv' => $this->request->getData('states')
            ])->first();
        }

        $this->set(compact('statesLists', 'daily', 'state', 'geoState'));
    }
}
