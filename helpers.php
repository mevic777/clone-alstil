<?php

function cars_render($connection)
{
    foreach ($connection->query("SELECT * FROM `company`") as $company) {
        echo '<a class="link-secondary link-underline-opacity-0 m-1" href="/products?company=' . $company['link'] . '">' . $company['name'] . '</a>';
    }
}
