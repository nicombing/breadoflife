<?php
session_start();
require_once 'includes/lang.php';
$page_title = 'Parents Guidelines';
?>
<?php include 'includes/header.php'; ?>

<style>
    .premium-card {
        background: #ffffff; border-radius: 24px;
        box-shadow: 0 15px 40px rgba(255, 152, 0, 0.15);
        overflow: hidden; border: 1px solid rgba(0,0,0,0.05);
    }
    .premium-header {
        background: linear-gradient(135deg, #FF9800 0%, #FFCC80 100%);
        padding: 40px; color: white; position: relative;
    }
    .premium-header::after {
        content: ''; position: absolute; bottom: -50%; left: -10%;
        width: 200px; height: 200px; background: rgba(255,255,255,0.15); border-radius: 50%;
    }
    .premium-body { padding: 40px; }
    .rules-list { list-style: none; padding: 0; margin: 0; }
    .rules-item {
        display: flex; gap: 15px; margin-bottom: 20px; padding-bottom: 20px;
        border-bottom: 1px dashed #e0e0e0; color: #4a5568; font-size: 1.05rem; line-height: 1.6;
    }
    .rules-item:last-child { border-bottom: none; margin-bottom: 0; }
    .rules-icon {
        background: #FFF3E0; color: #EF6C00; width: 32px; height: 32px;
        border-radius: 50%; display: flex; align-items: center; justify-content: center;
        flex-shrink: 0; font-size: 1rem;
    }
    body.dark-mode .premium-card {
        background: #1F2937; border: 1px solid #FF9800; box-shadow: 0 10px 40px rgba(0,0,0,0.5);
    }
    body.dark-mode .premium-header h2, body.dark-mode .premium-header p { color: #ffffff !important; }
    body.dark-mode .premium-body { background: #1F2937; }
    body.dark-mode .rules-item { color: #E5E7EB !important; border-bottom: 1px dashed #374151; }
    body.dark-mode .rules-icon { background: #7c2d12; color: #fdba74; }
</style>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="premium-card">
                <div class="premium-header">
                    <div class="d-flex align-items-center gap-3 position-relative z-1">
                        <div class="bg-white text-warning p-3 rounded-circle shadow-sm">
                            <i class="bi bi-people-fill fs-3" style="color: #FF9800;"></i>
                        </div>
                        <div>
                            <h2 class="fw-bold mb-1" style="font-family: var(--font-heading);"><?php echo t('parents_title'); ?></h2>
                            <p class="mb-0 opacity-75"><?php echo t('parents_desc'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="premium-body">
                    <ul class="rules-list">
                        <li class="rules-item"><div class="rules-icon"><i class="bi bi-caret-right-fill"></i></div><span><?php echo t('parent_1'); ?></span></li>
                        <li class="rules-item"><div class="rules-icon"><i class="bi bi-caret-right-fill"></i></div><span><?php echo t('parent_2'); ?></span></li>
                        <li class="rules-item"><div class="rules-icon"><i class="bi bi-caret-right-fill"></i></div><span><?php echo t('parent_3'); ?></span></li>
                        <li class="rules-item"><div class="rules-icon"><i class="bi bi-caret-right-fill"></i></div><span><?php echo t('parent_4'); ?></span></li>
                        <li class="rules-item"><div class="rules-icon"><i class="bi bi-caret-right-fill"></i></div><span><?php echo t('parent_5'); ?></span></li>
                    </ul>
                    <div class="mt-5 text-center">
                        <a href="index.php" class="btn btn-outline-dark rounded-pill px-5 py-2 fw-bold">
                            <i class="bi bi-arrow-left me-2"></i> <?php echo t('back_home'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
