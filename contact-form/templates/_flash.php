<?php $messages = getFlashMessage(); ?>

<?php if (!empty($messages)) : ?>
    <div class="flash-messages">
        <?php foreach ($messages as $type => $message) : ?>
            <div class="flash-message flash-<?= htmlspecialchars((string) $type, ENT_QUOTES, 'UTF-8'); ?>">
                <?= nl2br(htmlspecialchars((string) $message, ENT_QUOTES, 'UTF-8')); ?>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

