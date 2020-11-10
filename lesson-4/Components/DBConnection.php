<?php


class DBConnection extends AbstractDBComponent
{
    public function connectDB() {
        $mysqli = mysqli_connect(
            $configConnect['host'],
            $configConnect['user'],
            $configConnect['password'],
            $configConnect['db']
        );
        return $mysqli;
    }
}
