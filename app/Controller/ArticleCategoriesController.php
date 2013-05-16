<?php
App::uses('AppController', 'Controller');
/**
 * ArticleCategories Controller
 *
 * @property ArticleCategory $ArticleCategory
 */
class ArticleCategoriesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ArticleCategory->recursive = 0;
		$this->set('articleCategories', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ArticleCategory->exists($id)) {
			throw new NotFoundException(__('Invalid article category'));
		}
		$options = array('conditions' => array('ArticleCategory.' . $this->ArticleCategory->primaryKey => $id));
		$this->set('articleCategory', $this->ArticleCategory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ArticleCategory->create();
			if ($this->ArticleCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The article category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The article category could not be saved. Please, try again.'));
			}
		}
		$articles = $this->ArticleCategory->Article->find('list');
		$categories = $this->ArticleCategory->Category->find('list');
		$this->set(compact('articles', 'categories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ArticleCategory->exists($id)) {
			throw new NotFoundException(__('Invalid article category'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ArticleCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The article category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The article category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ArticleCategory.' . $this->ArticleCategory->primaryKey => $id));
			$this->request->data = $this->ArticleCategory->find('first', $options);
		}
		$articles = $this->ArticleCategory->Article->find('list');
		$categories = $this->ArticleCategory->Category->find('list');
		$this->set(compact('articles', 'categories'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ArticleCategory->id = $id;
		if (!$this->ArticleCategory->exists()) {
			throw new NotFoundException(__('Invalid article category'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ArticleCategory->delete()) {
			$this->Session->setFlash(__('Article category deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Article category was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
