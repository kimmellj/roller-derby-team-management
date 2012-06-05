<?php
App::uses('AppController', 'Controller');
/**
 * Committees Controller
 *
 * @property Committee $Committee
 */
class CommitteesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Committee->recursive = 0;
		$this->set('committees', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Committee->id = $id;
		if (!$this->Committee->exists()) {
			throw new NotFoundException(__('Invalid committee'));
		}
		$this->set('committee', $this->Committee->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Committee->create();
			if ($this->Committee->save($this->request->data)) {
				$this->Session->setFlash(__('The committee has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The committee could not be saved. Please, try again.'));
			}
		}
		$people = $this->Committee->Person->find('list');
		$this->set(compact('people'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Committee->id = $id;
		if (!$this->Committee->exists()) {
			throw new NotFoundException(__('Invalid committee'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Committee->save($this->request->data)) {
				$this->Session->setFlash(__('The committee has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The committee could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Committee->read(null, $id);
		}
		$people = $this->Committee->Person->find('list');
		$this->set(compact('people'));
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
		$this->Committee->id = $id;
		if (!$this->Committee->exists()) {
			throw new NotFoundException(__('Invalid committee'));
		}
		if ($this->Committee->delete()) {
			$this->Session->setFlash(__('Committee deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Committee was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
