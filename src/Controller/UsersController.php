<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{

    public function initialize(){
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }
    
    public function beforeFilter(\Cake\Event\Event $event) {
        $this->Auth->allow(['add', 'ajax_register']);
    }
    
    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('users', $this->paginate($this->Users));
        $this->set('_serialize', ['users']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Feeds', 'FeedRequests']
        ]);
        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }
            
        /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['controller' => 'Feeds', 'action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
                return $this->redirect(['action' => 'login']);
            }
        }
        $feeds = $this->Users->Feeds->find('list', ['limit' => 200]);
        $this->set(compact('user', 'feeds'));
        $this->set('_serialize', ['user']);
    }
    
    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Feeds']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $feeds = $this->Users->Feeds->find('list', ['limit' => 200]);
        $this->set(compact('user', 'feeds'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
    
    public function login(){
        if($this->request->is('post')){
            $user = $this->Auth->identify();
            if($user){
                $this->Auth->setUser($user);
                $this->Flash->success("You have been successfully logged in.");
                return $this->redirect(['controller' => 'Feeds', 'action' => 'index']);
            }
            $this->Flash->error('Your username or password is incorrect.');
        }
    }
    
    public function logout(){
        $this->Flash->success('You have been successfully logged out.');
        return $this->redirect($this->Auth->logout());
    }
    
    public function ajax_register(){
        $this->layout = 'ajax';
        $user = $this->Users->newEntity();
        $this->autoRender = false;
        $data = array();
        if ($this->request->is('ajax')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Registration Successful.'));
                $data = array('success'=>'success');
                $this->response->statusCode(200);
            } else {
                $data = array('fail'=>'fail', 'errors'=> $this->Users->invalidFields());
            }
        }
        $this->set(compact('data'));
        $this->set('_serialize', 'data');
    }
}
