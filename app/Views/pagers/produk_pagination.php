<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ul.pagination {
    display: inline-block;
    padding: 0;
    margin: 0;
}
*{
    /* font-size: 10px; */
}

ul.pagination li {display: inline;}

ul.pagination li a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
    border: 1px solid #ddd;
    font-size: 22px;
}



nav.Page-navigation {
    float: right;
    padding-right: 20px;
}

ul.pagination li a.active {
    background-color: #146356;
    color: white;
    border: 1px solid #146356;
}

ul.pagination li a:hover:not(.active) {background-color: #ddd;}

    </style>
</head>

<body>
    
    <!-- <ul class="pagination">
        <li><a href="tryit.asp-filename=trycss_ex_pagination_size.html#">«</a></li>
        <li><a href="tryit.asp-filename=trycss_ex_pagination_size.html#">1</a></li>
        <li><a class="active" href="tryit.asp-filename=trycss_ex_pagination_size.html#">2</a></li>
        <li><a href="tryit.asp-filename=trycss_ex_pagination_size.html#">3</a></li>
        <li><a href="tryit.asp-filename=trycss_ex_pagination_size.html#">4</a></li>
        <li><a href="tryit.asp-filename=trycss_ex_pagination_size.html#">5</a></li>
        <li><a href="tryit.asp-filename=trycss_ex_pagination_size.html#">6</a></li>
        <li><a href="tryit.asp-filename=trycss_ex_pagination_size.html#">7</a></li>
        <li><a href="tryit.asp-filename=trycss_ex_pagination_size.html#">»</a></li>
    </ul> -->

    <?php $pager->setSurroundCount(2) ?>

    <nav aria-label="<?= lang('Pager.pageNavigation') ?>" class="Page-navigation">
    <ul class="pagination">
        <?php if ($pager->hasPreviousPage()) : ?>
            <li>
                <a href="<?= $pager->getFirst() ?>" aria-label="<?= lang('Pager.first') ?>">
                    <span aria-hidden="true"><?= '<<'  ?>
                    <?//= lang('Pager.first') ?>
                </span>
                </a>
            </li>
            <li>
                <a href="<?= $pager->getPreviousPage() ?>" aria-label="<?= lang('Pager.previous') ?>">
                    <span aria-hidden="true">
                    <?= '<'  ?>
                        <?//= lang('Pager.previous') ?>
                    </span>
                </a>
            </li>
        <?php endif ?>

        <?php foreach ($pager->links() as $link): ?>
            <li>
                <a href="<?= $link['uri'] ?>"  <?= $link['active'] ? 'class="active"' : '' ?>>
                    <?= $link['title'] ?>
                </a>
            </li>
        <?php endforeach ?>

        <?php if ($pager->hasNextPage()) : ?>
            <li>
                <a href="<?= $pager->getNextPage() ?>" aria-label="<?= lang('Pager.next') ?>">
                    <span aria-hidden="true">
                        <?//= lang('Pager.next') ?>
                        <?= '>'  ?>
                    </span>
                </a>
            </li>
            <li>
                <a href="<?= $pager->getLast() ?>" aria-label="<?= lang('Pager.last') ?>">
                    <span aria-hidden="true">
                    <?= '>>'  ?>
                        <?//= lang('Pager.last') ?>
                    </span>
                </a>
            </li>
        <?php endif ?>
    </ul>
</nav>

</body>

</html>