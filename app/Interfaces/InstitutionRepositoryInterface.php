<?php

namespace App\Interfaces;

interface InstitutionRepositoryInterface
{
    public function index();
    public function store($request);
    public function show($id);
    public function update($request, $id);
    public function destroy($id);
}