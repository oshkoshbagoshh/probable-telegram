<?php
//TODO: run tests for spreadsheet management

test('example', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});
