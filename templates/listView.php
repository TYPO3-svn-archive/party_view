
<?php $entryList = $this->get('entryList'); ?>
<?php if($entryList->isNotEmpty()): ?>
        <ol>
<?php endif; ?>
<?php for($entryList->rewind(); $entryList->valid(); $entryList->next()): $entry = $entryList->current();       ?>
        <li>
			<h3>Insert HTML/Code to display elements here</h3>
        </li>
<?php endfor; ?>
<?php if($entryList->isNotEmpty()): ?>
        </ol>
<?php endif; ?>
