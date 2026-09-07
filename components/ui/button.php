<?php

// Shared button component for links and form actions.
$buttonType = $buttonType ?? 'link';
$buttonLabel = $buttonLabel ?? 'Button';
$buttonClass = $buttonClass ?? 'button';
$buttonHref = $buttonHref ?? '#';
$buttonSubmitType = $buttonSubmitType ?? 'submit';

if ($buttonType === 'submit'):
?>
    <button
        type="<?= htmlspecialchars($buttonSubmitType, ENT_QUOTES, 'UTF-8') ?>"
        class="<?= htmlspecialchars($buttonClass, ENT_QUOTES, 'UTF-8') ?>"
    >
        <?= htmlspecialchars($buttonLabel, ENT_QUOTES, 'UTF-8') ?>
    </button>
<?php else: ?>
    <a
        href="<?= htmlspecialchars($buttonHref, ENT_QUOTES, 'UTF-8') ?>"
        class="<?= htmlspecialchars($buttonClass, ENT_QUOTES, 'UTF-8') ?>"
    >
        <?= htmlspecialchars($buttonLabel, ENT_QUOTES, 'UTF-8') ?>
    </a>
<?php endif; ?>
