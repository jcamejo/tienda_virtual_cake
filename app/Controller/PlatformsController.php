<?php
App::uses('AppController', 'Controller');
/**
 * Platforms Controller
 *
 * @property Platform $Platform
 */
class PlatformsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Platform->recursive = 0;
		$this->set('platforms', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Platform->exists($id)) {
			throw new NotFoundException(__('Invalid platform'));
		}
		$options = array('conditions' => array('Platform.' . $this->Platform->primaryKey => $id));
		$this->set('platform', $this->Platform->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Platform->create();
			if ($this->Platform->save($this->request->data)) {
				$this->Session->setFlash(__('The platform has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The platform could not be saved. Please, try again.'));
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
		if (!$this->Platform->exists($id)) {
			throw new NotFoundException(__('Invalid platform'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Platform->save($this->request->data)) {
				$this->Session->setFlash(__('The platform has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The platform could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Platform.' . $this->Platform->primaryKey => $id));
			$this->request->data = $this->Platform->find('first', $options);
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
		$this->Platform->id = $id;
		if (!$this->Platform->exists()) {
			throw new NotFoundException(__('Invalid platform'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Platform->delete()) {
			$this->Session->setFlash(__('Platform deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Platform was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
