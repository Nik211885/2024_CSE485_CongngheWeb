<?php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>Departments</title>
</head>
<body>
<?php include 'header.php';?>
<main>
    <div class="container">
        <h3 class="text-center my-3 text-success text-uppercase fw-bold">Danh sách phòng ban</h3>
        <a href="<?= DOMAIN . "/index.php?controller=department&action=add" ?>" class="btn btn-success mb-2"><i class="bi bi-plus-circle">
            Thêm mới phòng ban</i></a>
        <table class="table table-bordered table-striped table-hover">
            <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên phòng ban</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Email</th>
                <th scope="col" colspan="3">Thao tác</th>
            </tr>
            </thead>
            <?php
            $itemsPerPage = 10;
            $currentPage = isset($_GET['page']) ? $_GET['page'] : 1; //lay dia chi trang hien tai;
            $totalPages = ceil(count($departments) / $itemsPerPage); //tong so trang = lam tron len(tong sp / so sp trong trang)
            //chon id spham hien tai cho trang hien tai
            $currentPageItems = array_slice($departments, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);
            ?>
            <tbody>
            <?php foreach ($currentPageItems as $department): ?>
                <tr>
                    <th scope="row"><?= $department->getID(); ?></th>
                    <td><?= $department->getName(); ?></td>
                    <td><?= $department->getAddress(); ?></td>
                    <td><?= $department->getEmail(); ?></td>
                    <td>
                        <a href="user_detail.php?id=<?= $department->getID(); ?>" class="btn btn-primary"><i
                                    class="bi bi-eye-fill"></i></a>
                    </td>
                    <td><a href="<?= DOMAIN . "/index.php?controller=department&action=edit&id=".$department->getID() ?>" class="btn btn-warning"><i class="bi bi-pen-fill"></i></a></td>
                    <td><a href="" class="btn btn-danger" style="background-color: darkred"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

        <ul class="pagination">
            <!--            Previous-->
            <?php if ($currentPage > 1) : ?>
                <li class="page-item">
                    <a class="page-link" href="?controller=department&action=index&page=<?php echo $currentPage - 1; ?>">Previous</a>
                </li>
            <?php else: ?>
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
            <?php endif; ?>

            <?php
            $displayPages = 7;
            $minPages = $currentPage - ($displayPages - 1) / 2;
            $maxPages = $currentPage + ($displayPages - 1) / 2;

            if ($currentPage <= ($displayPages - 1) / 2)
                $maxPages = $displayPages;
            if ($currentPage > $totalPages - ($displayPages - 1) / 2) {
                $minPages = $totalPages - $displayPages + 1;
                $maxPages = $totalPages;
            }
            ?>
            <?php for ($i = $minPages; $i <= $maxPages; $i++) : ?>
                <?php if ($i == $currentPage) : ?>
                    <li class="page-item active"><a class="page-link"><?php echo $i; ?></a></li>
                <?php elseif ($i > 0) : ?>
                    <li class="page-item"><a class="page-link"
                                             href="?controller=department&action=index&page=<?php echo $i; ?>"><?php echo $i; ?></a>
                    </li>
                <?php endif; ?>
            <?php endfor; ?>

            <!--            Next-->
            <?php if ($currentPage < $totalPages) : ?>
                <li class="page-item"><a class="page-link" href="?controller=department&action=index&page=<?php echo $currentPage + 1; ?>">Next</a></li>
            <?php endif; ?>

        </ul>
    </div>


</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
