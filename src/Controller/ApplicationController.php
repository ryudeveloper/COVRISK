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
    public function beforeFilter(EventInterface $event)
    {
        parent::beforeFilter($event);
        
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $application = $this->paginate($this->Application);

        $this->set(compact('application'));
    }

    /**
     * View method
     *
     * @param string|null $id Application id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $application = $this->Application->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('application'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $application = $this->Application->newEmptyEntity();
        if ($this->request->is('post')) {
            $application = $this->Application->patchEntity($application, $this->request->getData());
            if ($this->Application->save($application)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('application'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Application id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $application = $this->Application->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $application = $this->Application->patchEntity($application, $this->request->getData());
            if ($this->Application->save($application)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('application'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Application id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $application = $this->Application->get($id);
        if ($this->Application->delete($application)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function login()
    {
        if ($this->request->is('post')) {
            $application = $this->Auth->identify();
            if ($application) {
                $this->Auth->setUser($application);
                $this->Flash->success(__('You are logged in'));
                return $this->redirect($this->Auth->redirectUrl('/app/covrisk'));
            } else {
                $this->Flash->error(__('Username or password is incorrect'));
            }
        }
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
        $this->Flash->success(__('You are logged out'));
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
        if ($this->request->getData('states')) {
            $responseDaily = $http->get("https://api.covidtracking.com/v2/states/{$this->request->getData('states')}/daily.json");
            $daily = $responseDaily->getJson()['data'];
            $collection = new Collection($arrayStates);
            $state = $collection->firstMatch([
                'state_code' => $this->request->getData('states'),
            ]);
        }



        $this->set(compact('statesLists', 'daily', 'state'));
    }
}
