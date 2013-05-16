<?php
App::uses('AppController', 'Controller');
/**
 * UserChallenges Controller
 *
 * @property UserChallenge $UserChallenge
 */
class UserChallengesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->UserChallenge->recursive = 0;
		$this->set('userChallenges', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->UserChallenge->exists($id)) {
			throw new NotFoundException(__('Invalid user challenge'));
		}
		$options = array('conditions' => array('UserChallenge.' . $this->UserChallenge->primaryKey => $id));
		$this->set('userChallenge', $this->UserChallenge->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UserChallenge->create();
			if ($this->UserChallenge->save($this->request->data)) {
				$this->Session->setFlash(__('The user challenge has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user challenge could not be saved. Please, try again.'));
			}
		}
		$users = $this->UserChallenge->User->find('list');
		$challenges = $this->UserChallenge->Challenge->find('list');
		$this->set(compact('users', 'challenges'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->UserChallenge->exists($id)) {
			throw new NotFoundException(__('Invalid user challenge'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->UserChallenge->save($this->request->data)) {
				$this->Session->setFlash(__('The user challenge has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user challenge could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UserChallenge.' . $this->UserChallenge->primaryKey => $id));
			$this->request->data = $this->UserChallenge->find('first', $options);
		}
		$users = $this->UserChallenge->User->find('list');
		$challenges = $this->UserChallenge->Challenge->find('list');
		$this->set(compact('users', 'challenges'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->UserChallenge->id = $id;
		if (!$this->UserChallenge->exists()) {
			throw new NotFoundException(__('Invalid user challenge'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->UserChallenge->delete()) {
			$this->Session->setFlash(__('User challenge deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User challenge was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
