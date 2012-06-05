<?php
App::uses('AppController', 'Controller');
/**
 * CommitteesPeople Controller
 *
 * @property CommitteesPerson $CommitteesPerson
 */
class CommitteesPeopleController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CommitteesPerson->recursive = 0;
		$this->set('committeesPeople', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CommitteesPerson->id = $id;
		if (!$this->CommitteesPerson->exists()) {
			throw new NotFoundException(__('Invalid committees person'));
		}
		$this->set('committeesPerson', $this->CommitteesPerson->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CommitteesPerson->create();
			if ($this->CommitteesPerson->save($this->request->data)) {
				$this->Session->setFlash(__('The committees person has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The committees person could not be saved. Please, try again.'));
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
		$this->CommitteesPerson->id = $id;
		if (!$this->CommitteesPerson->exists()) {
			throw new NotFoundException(__('Invalid committees person'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CommitteesPerson->save($this->request->data)) {
				$this->Session->setFlash(__('The committees person has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The committees person could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CommitteesPerson->read(null, $id);
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
		$this->CommitteesPerson->id = $id;
		if (!$this->CommitteesPerson->exists()) {
			throw new NotFoundException(__('Invalid committees person'));
		}
		if ($this->CommitteesPerson->delete()) {
			$this->Session->setFlash(__('Committees person deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Committees person was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
