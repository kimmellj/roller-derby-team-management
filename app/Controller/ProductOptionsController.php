<?php
App::uses('AppController', 'Controller');
/**
 * ProductOptions Controller
 *
 * @property ProductOption $ProductOption
 */
class ProductOptionsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		
		
		$this->ProductOption->recursive = 0;

		if (!empty($this->request->data)) {
			$this->ProductOption->saveMany($this->data);
			$this->redirect(array('action' => 'index'));
		}
		
		$this->set('productOptions', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ProductOption->id = $id;
		if (!$this->ProductOption->exists()) {
			throw new NotFoundException(__('Invalid product option'));
		}
		$this->set('productOption', $this->ProductOption->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProductOption->create();
			if ($this->ProductOption->save($this->request->data)) {
				$this->Session->setFlash(__('The product option has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product option could not be saved. Please, try again.'));
			}
		}
		$products = $this->ProductOption->Product->find('list');
		$this->set(compact('products'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->ProductOption->id = $id;
		if (!$this->ProductOption->exists()) {
			throw new NotFoundException(__('Invalid product option'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ProductOption->save($this->request->data)) {
				$this->Session->setFlash(__('The product option has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product option could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ProductOption->read(null, $id);
		}
		$products = $this->ProductOption->Product->find('list');
		$this->set(compact('products'));
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
		$this->ProductOption->id = $id;
		if (!$this->ProductOption->exists()) {
			throw new NotFoundException(__('Invalid product option'));
		}
		if ($this->ProductOption->delete()) {
			$this->Session->setFlash(__('Product option deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Product option was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
