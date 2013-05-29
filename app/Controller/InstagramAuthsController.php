<?php
App::uses('AppController', 'Controller');
/**
 * InstagramAuths Controller
 *
 * @property InstagramAuth $InstagramAuth
 */
class InstagramAuthsController extends AppController {

/**
 * index method
 *
 * @return void
 */
    public function index() {
        $this->InstagramAuth->recursive = 0;
        $this->set('instagramAuths', $this->paginate());
    }

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function view($id = null) {
        if (!$this->InstagramAuth->exists($id)) {
            throw new NotFoundException(__('Invalid instagram auth'));
        }
        $options = array('conditions' => array('InstagramAuth.' . $this->InstagramAuth->primaryKey => $id));
        $this->set('instagramAuth', $this->InstagramAuth->find('first', $options));
    }

/**
 * add method
 *
 * @return void
 */
    public function add() {
        if ($this->request->is('post')) {
            $this->InstagramAuth->create();
            if ($this->InstagramAuth->save($this->request->data)) {
                $this->Session->setFlash(__('The instagram auth has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The instagram auth could not be saved. Please, try again.'));
            }
        }
    }

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function edit($id = null) {
        if (!$this->InstagramAuth->exists($id)) {
            throw new NotFoundException(__('Invalid instagram auth'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->InstagramAuth->save($this->request->data)) {
                $this->Session->setFlash(__('The instagram auth has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The instagram auth could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('InstagramAuth.' . $this->InstagramAuth->primaryKey => $id));
            $this->request->data = $this->InstagramAuth->find('first', $options);
        }
    }

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function delete($id = null) {
        $this->InstagramAuth->id = $id;
        if (!$this->InstagramAuth->exists()) {
            throw new NotFoundException(__('Invalid instagram auth'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->InstagramAuth->delete()) {
            $this->Session->setFlash(__('Instagram auth deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Instagram auth was not deleted'));
        $this->redirect(array('action' => 'index'));
    }
}
