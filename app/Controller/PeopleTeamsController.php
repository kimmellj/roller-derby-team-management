<?php
App::uses('AppController', 'Controller');
/**
 * PeopleTeams Controller
 *
 * @property PeopleTeam $PeopleTeam
 */
class PeopleTeamsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PeopleTeam->recursive = 0;
		$this->set('peopleTeams', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->PeopleTeam->id = $id;
		if (!$this->PeopleTeam->exists()) {
			throw new NotFoundException(__('Invalid people team'));
		}
		$this->set('peopleTeam', $this->PeopleTeam->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PeopleTeam->create();
			if ($this->PeopleTeam->save($this->request->data)) {
				$this->Session->setFlash(__('The people team has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The people team could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->PeopleTeam->id = $id;
		if (!$this->PeopleTeam->exists()) {
			throw new NotFoundException(__('Invalid people team'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PeopleTeam->save($this->request->data)) {
				$this->Session->setFlash(__('The people team has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The people team could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->PeopleTeam->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->PeopleTeam->id = $id;
		if (!$this->PeopleTeam->exists()) {
			throw new NotFoundException(__('Invalid people team'));
		}
		if ($this->PeopleTeam->delete()) {
			$this->Session->setFlash(__('People team deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('People team was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
