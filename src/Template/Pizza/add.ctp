<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Pizza'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="pizza form large-9 medium-8 columns content">
    <?= $this->Form->create($pizza) ?>
    <fieldset>
        <legend><?= __('Add Pizza') ?></legend>
        <?php
			echo $this->Form->input('pizzaSize', array(
				'options' => array('Small', 'Medium', 'Large', 'Extra Large'),
				'empty' => '(Select size)'
				));
				
            echo $this->Form->input('crustType', array(
				'options' => array('Hand Toasted', 'Pan', 'Stuffed', 'Thin'),
				'empty' => '(Select type)'
				));
				
			echo $this->Form->input('toppings', array(
				'label' => 'Toppings',
				'type' => 'select',
				'multiple' => 'checkbox',
				'options' => array('Cheese' => 'Cheese', 'Red_Onion' => 'Red Onion', 'Green_Pepper' => 'Green Pepper', 'Pineapple' => 'Pineapple')
				));
				
			echo $this->Form->input('quantity', array(
				'options' => array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10),
				'empty' => '(Select)'
				));
				
            echo $this->Form->input('address');
            echo $this->Form->input('city');
            echo $this->Form->input('province', array(
				'options' => array('Ontario', 'Manitoba', 'Quebec', 'Saskatchewan'),
				'empty' => '(Select)'
				));
            echo $this->Form->input('postal_code');
            echo $this->Form->input('contact');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
