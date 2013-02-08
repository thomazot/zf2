<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Api\Controller;

use Zend\Mvc\Controller\AbstractRestFulController;
use Zend\View\Model\JsonModel;

class IndexController extends AbstractRestFulController
{
	public function getList() {
		return new JsonModel(array("users" => array()));
	}

	public function get($id) {
		return new JsonModel(array("id" => $id));
	}

	public function create($data) {
		return new JsonModel(array("created" => "yes"));
	}

	public function update($id, $data) {
		return new JsonModel(array("updated" => "yes"));
	}

	public function delete($id) {
		return new JsonModel(array("deleted" => $i));
	}

}