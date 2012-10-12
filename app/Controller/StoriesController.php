<?php
App::uses('AppController', 'Controller');

/*

 */
class StoriesController extends AppController {
	public $scaffold = 'admin';

	public $components = array('Session');

	public $helpers = array('Form', 'Html');

	public function index() {
		$this->set('stories', $this->Story->find('all'));
	}

	public function add() {
		if ($this->request->is('post')) {
			if ($this->Story->save($this->request->data)) {
				$this->Session->setFlash("Story has been saved.");
                $this->set('saved', true);
				return $this->redirect(array('action' => 'index'));
			} else {
                $this->set('saved', false);
				$this->Session->setFlash("Unable to add the Story.");
			}
		}

		$this->set('sprints', $this->Story->Sprint->find('list'));
	}

	public function edit($id = null) {
		$this->Story->id = $id;
		if ($this->request->is('get')) {
			$this->request->data = $this->Story->read();
		} else {
			if ($this->Story->save($this->request->data)) {
				$this->Session->setFlash('The story has been updated.');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Unable to update the story.');
			}
		}
	}

    public function swap() {
        return true;
    }
}
