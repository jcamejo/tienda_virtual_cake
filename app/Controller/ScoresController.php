<?php
App::uses('AppController', 'Controller');

/**
 * Scores Controller
 *
 * @property Score $Score
 */
class ScoresController extends AppController {
    public $helpers = array('GoogleChart.GoogleChart');
/**
 * index method
 *
 * @return void
 */
    public function index() {
        $this->Score->recursive = 0;
        $this->set('scores', $this->paginate());
    }

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function view($id = null) {
        if (!$this->Score->exists($id)) {
            throw new NotFoundException(__('Invalid score'));
        }
        $options = array('conditions' => array('Score.' . $this->Score->primaryKey => $id));
        $this->set('score', $this->Score->find('first', $options));
    }

/**
 * add method
 *
 * @return void
 */
    public function add() {
        if ($this->request->is('post')) {
            $this->Score->create();
            if ($this->Score->save($this->request->data)) {
                $this->Session->setFlash(__('The score has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The score could not be saved. Please, try again.'));
            }
        }
        $users = $this->Score->User->find('list');
        $this->set(compact('users'));
    }

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function edit($id = null) {
        if (!$this->Score->exists($id)) {
            throw new NotFoundException(__('Invalid score'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            
            $this->request->data['Score']['dateUpdated'] = date("Y-m-d H:i:s"); 
            if ($this->Score->save($this->request->data)) {
                $this->Session->setFlash(__('The score has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The score could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Score.' . $this->Score->primaryKey => $id));
            $this->request->data = $this->Score->find('first', $options);
        }
        $users = $this->Score->User->find('list');
        $this->set(compact('users'));
    }

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function delete($id = null) {
        $this->Score->id = $id;
        if (!$this->Score->exists()) {
            throw new NotFoundException(__('Invalid score'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Score->delete()) {
            $this->Session->setFlash(__('Score deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Score was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

    public function drawStats() {
        /*$this->set('scores', $this->Score->find(
            'all',
            array(
                'order' => array('Score.user_id' => 'ASC'),
                'fields' => array(
                    'Score.user_id',
                    'Score.score'
                )
            )
        ));*/

        $scores = $this->Score->find(
            'all',
            array(
                'order' => array('Score.score' => 'DESC'),
                'fields' => array(
                    'Score.score',
                    'Score.user_id'
                    
                )
            )
        );

        //Setup data for chart
        $chart = new GoogleChart();

        $chart->type("ColumnChart");  
            //Options array holds all options for Chart API
            $chart->options(array(
                'title' => "User Scores",
                'hAxis' => array(
                    'title' => 'User IDs',
                    'titleTextStyle' => array('color'=>'red'),
                    'baseline' => 'auto' 
                ),
                'chartArea'=> array(
                    'height' => 300,
                    'width' => 700
                ),
                'height' => 500,
                'width' => 1000,
                'bar' => array(
                    
                )
            )); 
            


            $chart->columns(array(
                 //Each column key should correspond to a field in your data array
                'user_id' => array(
                    //Tells the chart what type of data this is
                    'type' => 'number',     
                    //The chart label for this column           
                    'label' => 'User ID'
                ),
                'score' => array(
                    'type' => 'number',
                    'label' => 'Score'
                )
               
                
            ));

       foreach($scores as $round){
            $chart->addRow($round['Score']);
        }
        $chart->addRow(array('user_id' => '100', 'score' => 200));

        $this->set(compact('chart'));

    }
}
