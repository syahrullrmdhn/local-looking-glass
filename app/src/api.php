<?php
header('Content-Type: application/json');

// Ambil data dari permintaan POST
$data = json_decode(file_get_contents('php://input'), true);

// Validasi input
if (!isset($data['command']) || !isset($data['target'])) {
    echo json_encode(['error' => 'Invalid input. Please provide a valid command and target.']);
    exit;
}

$command = escapeshellcmd($data['command']);
$target = escapeshellarg($data['target']);

// Jalankan perintah berdasarkan input
$output = '';
if ($command === 'ping') {
    $output = shell_exec("ping -c 4 $target 2>&1");
} elseif ($command === 'mtr') {
    $output = shell_exec("mtr -r -c 1 $target 2>&1");
} else {
    echo json_encode(['error' => 'Unsupported command.']);
    exit;
}

// Kirim hasil kembali sebagai JSON
echo json_encode(['output' => $output]);
