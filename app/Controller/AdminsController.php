<?php

class AdminsController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('login', 'logout');
    }

    public function index() {
        $this->Admin->recursive = 0;
        $this->set('admins', $this->paginate());
    }

    public function view($id = null) {
        $this->Admin->id = $id;
        if (!$this->Admin->exists()) {
            throw new NotFoundException(__('Invalid Admin'));
        }
        $this->set('admin', $this->Admin->read(null, $id));
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->Admin->create();
            if ($this->Admin->save($this->request->data)) {
                $this->Session->setFlash(__('The Admin has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The Admin could not be saved. Please, try again.'));
            }
        }
    }

    public function edit($id = null) {
        $this->Admin->id = $id;
        if (!$this->Admin->exists()) {
            throw new NotFoundException(__('Invalid Admin'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Admin->save($this->request->data)) {
                $this->Session->setFlash(__('The Admin has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The Admin could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Admin->read(null, $id);
            unset($this->request->data['Admin']['password']);
        }
    }

    public function delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->Admin->id = $id;
        if (!$this->Admin->exists()) {
            throw new NotFoundException(__('Invalid Admin'));
        }
        if ($this->Admin->delete()) {
            $this->Session->setFlash(__('Admin deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Admin was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

    public function login() {
        $userData = $this->Auth->user();
        if($userData != null) {
            $this->redirect(array('controller' => 'pages', 'action' => 'home'));
        }

        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                $this->redirect($this->Auth->redirect());
            } else {
                $this->Session->setFlash(__('Invalid username or password, try again'));
            }
        }
    }

    public function logout() {
        $this->redirect($this->Auth->logout());
    }
}