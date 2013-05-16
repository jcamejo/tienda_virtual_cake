<?php
App::uses('AppController', 'Controller');
/**
 * ChallengeParams Controller
 *
 * @property ChallengeParam $ChallengeParam
 */
class ChallengeParamsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ChallengeParam->recursive = 0;
		$this->set('challengeParams', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ChallengeParam->exists($id)) {
			throw new NotFoundException(__('Invalid challenge param'));
		}
		$options = array('conditions' => array('ChallengeParam.' . $this->ChallengeParam->primaryKey => $id));
		$this->set('challengeParam', $this->ChallengeParam->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ChallengeParam->create();
			if ($this->ChallengeParam->save($this->request->data)) {
				$this->Session->setFlash(__('The challenge param has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The challenge param could not be saved. Please, try again.'));
			}
		}
		$challenges = $this->ChallengeParam->Challenge->find('list');
		$this->set(compact('challenges'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ChallengeParam->exists($id)) {
			throw new NotFoundException(__('Invalid challenge param'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ChallengeParam->save($this->request->data)) {
				$this->Session->setFlash(__('The challenge param has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The challenge param could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ChallengeParam.' . $this->ChallengeParam->primaryKey => $id));
			$this->request->data = $this->ChallengeParam->find('first', $options);
		}
		$challenges = $this->ChallengeParam->Challenge->find('list');
		$this->set(compact('challenges'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ChallengeParam->id = $id;
		if (!$this->ChallengeParam->exists()) {
			throw new NotFoundException(__('Invalid challenge param'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ChallengeParam->delete()) {
			$this->Session->setFlash(__('Challenge param deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Challenge param was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
