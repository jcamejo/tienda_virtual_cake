<?php
App::uses('AppController', 'Controller');
/**
 * Challenges Controller
 *
 * @property Challenge $Challenge
 */
class ChallengesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Challenge->recursive = 0;
		$this->set('challenges', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Challenge->exists($id)) {
			throw new NotFoundException(__('Invalid challenge'));
		}
		$options = array('conditions' => array('Challenge.' . $this->Challenge->primaryKey => $id));
		$this->set('challenge', $this->Challenge->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Challenge->create();
			if ($this->Challenge->save($this->request->data)) {
				$this->Session->setFlash(__('The challenge has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The challenge could not be saved. Please, try again.'));
			}
		}
		$platforms = $this->Challenge->Platform->find('list');
		$this->set(compact('platforms'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Challenge->exists($id)) {
			throw new NotFoundException(__('Invalid challenge'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Challenge->save($this->request->data)) {
				$this->Session->setFlash(__('The challenge has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The challenge could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Challenge.' . $this->Challenge->primaryKey => $id));
			$this->request->data = $this->Challenge->find('first', $options);
		}
		$platforms = $this->Challenge->Platform->find('list');
		$this->set(compact('platforms'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Challenge->id = $id;
		if (!$this->Challenge->exists()) {
			throw new NotFoundException(__('Invalid challenge'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Challenge->delete()) {
			$this->Session->setFlash(__('Challenge deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Challenge was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
