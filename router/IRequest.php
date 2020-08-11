<?php
interface IRequest
{
    public function getBody();
    public function json($body, $status);

}