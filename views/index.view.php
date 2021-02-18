<!doctype html>
<html lang="en">
<head>
    <?php include 'componente/header.view.php'; ?>
</head>
<body>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nume</th>
                <th>Prenume</th>
                <th>Grupa</th>
                <th>Email</th>
                <th>Data Nasterii</th>
                <th>Optiuni</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($date as $item): ?>
                <tr>
                    <td><?= $item['id']; ?></td>
                    <td><?= $item['nume']; ?></td>
                    <td><?= $item['prenume']; ?></td>
                    <td><?= $item['grupa']; ?></td>
                    <td><?= $item['email']; ?></td>
                    <td><?= $item['data_nasterii']; ?></td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="edit.php?id=<?=$item['id']; ?>">Edit</a>
                        <a class="btn btn-info btn-sm" href="show.php">View</a>
                        <a class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteElev-<?= $item['id']; ?>" >Delete</a>
                        <!-- Modal -->
                        <div class="modal fade" id="deleteElev-<?= $item['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Sunteti sigur?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="distroy.php" method="post" class="d-flex justify-content-around">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Nu</button>
                                            <button type="submit" class="btn btn-danger">Da</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php include 'componente/scripts.view.php'; ?>
</body>
</html>