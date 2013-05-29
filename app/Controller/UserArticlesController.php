<?php
App::uses('AppController', 'Controller');
/**
 * UserArticles Controller
 *
 * @property UserArticle $UserArticle
 */
class UserArticlesController extends AppController {

/**
 * index method
 *
 * @return void
 */
    public function index() {
        $this->UserArticle->recursive = 0;
        $this->set('userArticles', $this->paginate());
    }

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function view($id = null) {
        if (!$this->UserArticle->exists($id)) {
            throw new NotFoundException(__('Invalid user article'));
        }
        $options = array('conditions' => array('UserArticle.' . $this->UserArticle->primaryKey => $id));
        $this->set('userArticle', $this->UserArticle->find('first', $options));
    }

/**
 * add method
 *
 * @return void
 */
    public function add() {
        if ($this->request->is('post')) {
            $this->UserArticle->create();
            if ($this->UserArticle->save($this->request->data)) {
                $this->Session->setFlash(__('The user article has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user article could not be saved. Please, try again.'));
            }
        }
        $users = $this->UserArticle->User->find('list');
        $articles = $this->UserArticle->Article->find('list');
        $this->set(compact('users', 'articles'));
    }

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function edit($id = null) {
        if (!$this->UserArticle->exists($id)) {
            throw new NotFoundException(__('Invalid user article'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->UserArticle->save($this->request->data)) {
                $this->Session->setFlash(__('The user article has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user article could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('UserArticle.' . $this->UserArticle->primaryKey => $id));
            $this->request->data = $this->UserArticle->find('first', $options);
        }
        $users = $this->UserArticle->User->find('list');
        $articles = $this->UserArticle->Article->find('list');
        $this->set(compact('users', 'articles'));
    }

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function delete($id = null) {
        $this->UserArticle->id = $id;
        if (!$this->UserArticle->exists()) {
            throw new NotFoundException(__('Invalid user article'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->UserArticle->delete()) {
            $this->Session->setFlash(__('User article deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('User article was not deleted'));
        $this->redirect(array('action' => 'index'));
    }
}
