<?php
include 'includes/common-header.php';
require __DIR__ . '/includes/db.php';

$q = isset($_GET['q']) ? trim($_GET['q']) : '';
$perPage = 10;
$page = isset($_GET['page']) ? max(1, (int)$_GET['page']) : 1;
$offset = ($page - 1) * $perPage;
$baseSql = 'FROM reports WHERE file_path IS NOT NULL';
$params = [];
if ($q !== '') {
    $baseSql .= ' AND (batch LIKE ? OR address LIKE ?)';
    $params = ["%$q%", "%$q%"];
}
$totalStmt = $pdo->prepare('SELECT COUNT(*) ' . $baseSql);
$totalStmt->execute($params);
$total = $totalStmt->fetchColumn();
$totalPages = (int)ceil($total / $perPage);
$sql = 'SELECT id,batch,address,status,created_at,file_path ' . $baseSql . ' ORDER BY created_at DESC LIMIT ? OFFSET ?';
$stmt = $pdo->prepare($sql);
$idx = 1;
foreach ($params as $p) { $stmt->bindValue($idx++, $p); }
$stmt->bindValue($idx++, $perPage, PDO::PARAM_INT);
$stmt->bindValue($idx++, $offset, PDO::PARAM_INT);
$stmt->execute();
$reports = $stmt->fetchAll();
?>
<div class="container-fluid cms-layout">
    <div class="row h-100">

        <!-- Sidebar -->
        <?php include 'includes/sidebar.php' ?>

        <!-- Main Content -->
        <div class="col content" id="content">
            <?php include 'includes/topbar.php' ?>

            <div class="p-2">
                <section class="reports-wrapper">
                    <div class="container">

                        <div class="row mb-3 align-items-center">
                            <div class="col-lg-8">
                                <h1 class="report-title">Reports Library</h1>
                            </div>
                            <div class="col-md-4 text-md-end">
                                <form class="d-flex" method="get">
                                    <input type="text" name="q" class="form-control me-2" placeholder="Search batch or address" value="<?= htmlspecialchars($q) ?>">
                                    <button class="btn btn-danger" type="submit">Search</button>
                                </form>
                            </div>
                        </div>

                        <table class="reports-table bg-light table table-hover">
                            <thead>
                                <tr>
                                    <th>Batch</th>
                                    <th>Property Address</th>
                                    <th>Status</th>
                                    <th>Created</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($reports as $r): ?>
                                    <tr>
                                        <td><?= htmlspecialchars($r['batch']) ?></td>
                                        <td><?= htmlspecialchars($r['address']) ?></td>
                                        <td><?= htmlspecialchars(ucfirst($r['status'])) ?></td>
                                        <td><?= htmlspecialchars($r['created_at']) ?></td>
                                        <td>
                                            <a href="view-report.php?id=<?= $r['id'] ?>" target="_blank"><img src="assets/icons/view.png" alt="View" class="action-icon me-1"></a>
                                            <a href="download-report.php?id=<?= $r['id'] ?>"><img src="assets/icons/download.png" alt="Download" class="action-icon"></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <?php if ($totalPages > 1): ?>
                        <nav aria-label="Reports pagination">
                            <ul class="pagination">
                                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                                    <li class="page-item <?= $i == $page ? 'active' : '' ?>"><a class="page-link" href="?q=<?= urlencode($q) ?>&page=<?= $i ?>"><?= $i ?></a></li>
                                <?php endfor; ?>
                            </ul>
                        </nav>
                        <?php endif; ?>

                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/common-footer.php' ?>

