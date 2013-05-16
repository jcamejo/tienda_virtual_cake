<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
if (!Configure::read('debug')):
	throw new NotFoundException();
endif;
App::uses('Debugger', 'Utility');
?>

<div class="actions">
	<h3><?php echo __('Módulos'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Articulos'), array('controller' => 'articles', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Categorias'), array('controller' => 'categories', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Etiquetas'), array('controller' => 'tags', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Retos'), array('controller' => 'challenges', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Noticias'), array('controller' => 'news', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Patrocinantes'), array('controller' => 'sponsors', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Usuarios'), array('controller' => 'users', 'action' => 'index')); ?></li>
	</ul>
</div>
