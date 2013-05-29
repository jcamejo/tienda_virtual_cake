<?php
App::uses('AppController', 'Controller');
/**
 * ArticleSponsors Controller
 *
 * @property ArticleSponsor $ArticleSponsor
 */
class ArticleSponsorsController extends AppController {

/**
 * index method
 *
 * @return void
 */
    public function index() {
        $this->ArticleSponsor->recursive = 0;
        $this->set('articleSponsors', $this->paginate());
    }

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function view($id = null) {
        if (!$this->ArticleSponsor->exists($id)) {
            throw new NotFoundException(__('Invalid article sponsor'));
        }
        $options = array('conditions' => array('ArticleSponsor.' . $this->ArticleSponsor->primaryKey => $id));
        $this->set('articleSponsor', $this->ArticleSponsor->find('first', $options));
    }

/**
 * add method
 *
 * @return void
 */
    public function add() {
        if ($this->request->is('post')) {
            $this->ArticleSponsor->create();
            if ($this->ArticleSponsor->save($this->request->data)) {
                $this->Session->setFlash(__('The article sponsor has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The article sponsor could not be saved. Please, try again.'));
            }
        }
        $articles = $this->ArticleSponsor->Article->find('list');
        $sponsors = $this->ArticleSponsor->Sponsor->find('list');
        $this->set(compact('articles', 'sponsors'));
    }

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function edit($id = null) {
        if (!$this->ArticleSponsor->exists($id)) {
            throw new NotFoundException(__('Invalid article sponsor'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->ArticleSponsor->save($this->request->data)) {
                $this->Session->setFlash(__('The article sponsor has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The article sponsor could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('ArticleSponsor.' . $this->ArticleSponsor->primaryKey => $id));
            $this->request->data = $this->ArticleSponsor->find('first', $options);
        }
        $articles = $this->ArticleSponsor->Article->find('list');
        $sponsors = $this->ArticleSponsor->Sponsor->find('list');
        $this->set(compact('articles', 'sponsors'));
    }

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function delete($id = null) {
        $this->ArticleSponsor->id = $id;
        if (!$this->ArticleSponsor->exists()) {
            throw new NotFoundException(__('Invalid article sponsor'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->ArticleSponsor->delete()) {
            $this->Session->setFlash(__('Article sponsor deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Article sponsor was not deleted'));
        $this->redirect(array('action' => 'index'));
    }
}
