<?php
App::uses('AppController', 'Controller');
/**
 * TwitterAuths Controller
 *
 * @property TwitterAuth $TwitterAuth
 */
class TwitterAuthsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->TwitterAuth->recursive = 0;
		$this->set('twitterAuths', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TwitterAuth->exists($id)) {
			throw new NotFoundException(__('Invalid twitter auth'));
		}
		$options = array('conditions' => array('TwitterAuth.' . $this->TwitterAuth->primaryKey => $id));
		$this->set('twitterAuth', $this->TwitterAuth->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TwitterAuth->create();
			if ($this->TwitterAuth->save($this->request->data)) {
				$this->Session->setFlash(__('The twitter auth has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The twitter auth could not be saved. Please, try again.'));
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
		if (!$this->TwitterAuth->exists($id)) {
			throw new NotFoundException(__('Invalid twitter auth'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TwitterAuth->save($this->request->data)) {
				$this->Session->setFlash(__('The twitter auth has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The twitter auth could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TwitterAuth.' . $this->TwitterAuth->primaryKey => $id));
			$this->request->data = $this->TwitterAuth->find('first', $options);
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
		$this->TwitterAuth->id = $id;
		if (!$this->TwitterAuth->exists()) {
			throw new NotFoundException(__('Invalid twitter auth'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TwitterAuth->delete()) {
			$this->Session->setFlash(__('Twitter auth deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Twitter auth was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
