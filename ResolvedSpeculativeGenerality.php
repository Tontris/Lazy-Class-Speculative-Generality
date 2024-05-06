<?php
class LogService {
    public function logMessage($message) {
        $logFile = 'log.txt';
        $formattedMessage = date('Y-m-d H:i:s') . ': ' . $message . "\n";
        file_put_contents($logFile, $formattedMessage, FILE_APPEND);
    }
    public function logError(Exception $error) {
        $logFile = 'error_log.txt';
        $errorMessage = date('Y-m-d H:i:s') . ': ' . $error->getMessage() . "\n";
        file_put_contents($logFile, $errorMessage, FILE_APPEND);
    }
    public function logWarning($warning) {
        $logFile = 'warning_log.txt';
        $warningMessage = date('Y-m-d H:i:s') . ': ' . $warning . "\n";
        file_put_contents($logFile, $warningMessage, FILE_APPEND);
    }
}
$logService = new LogService();
$logService->logMessage("Це повідомлення для журналу");
$logService->logError(new Exception("Це помилка"));
$logService->logWarning("Це попередження");
?>