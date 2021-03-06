<?php
App::uses('AppController', 'Controller');
/**
 * ArticleTags Controller
 *
 * @property ArticleTag $ArticleTag
 */
class ArticleTagsController extends AppController {

/**
 * index method
 *
 * @return void
 */
    public function index() {
        $this->ArticleTag->recursive = 0;
        $this->set('articleTags', $this->paginate());
    }

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function view($id = null) {
        if (!$this->ArticleTag->exists($id)) {
            throw new NotFoundException(__('Invalid article tag'));
        }
        $options = array('conditions' => array('ArticleTag.' . $this->ArticleTag->primaryKey => $id));
        $this->set('articleTag', $this->ArticleTag->find('first', $options));
    }

/**
 * add method
 *
 * @return void
 */
    public function add() {
        if ($this->request->is('post')) {
            $this->ArticleTag->create();
            if ($this->ArticleTag->save($this->request->data)) {
                $this->Session->setFlash(__('The article tag has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The article tag could not be saved. Please, try again.'));
            }
        }
        $articles = $this->ArticleTag->Article->find('list');
        $tags = $this->ArticleTag->Tag->find('list');
        $this->set(compact('articles', 'tags'));
    }

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function edit($id = null) {
        if (!$this->ArticleTag->exists($id)) {
            throw new NotFoundException(__('Invalid article tag'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->ArticleTag->save($this->request->data)) {
                $this->Session->setFlash(__('The article tag has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The article tag could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('ArticleTag.' . $this->ArticleTag->primaryKey => $id));
            $this->request->data = $this->ArticleTag->find('first', $options);
        }
        $articles = $this->ArticleTag->Article->find('list');
        $tags = $this->ArticleTag->Tag->find('list');
        $this->set(compact('articles', 'tags'));
    }

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function delete($id = null) {
        $this->ArticleTag->id = $id;
        if (!$this->ArticleTag->exists()) {
            throw new NotFoundException(__('Invalid article tag'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->ArticleTag->delete()) {
            $this->Session->setFlash(__('Article tag deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Article tag was not deleted'));
        $this->redirect(array('action' => 'index'));
    }
}
