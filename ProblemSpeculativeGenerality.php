<?php
class LogService {
    public function logMessage($message) {
        $logFile = 'log.txt';
        $formattedMessage = date('Y-m-d H:i:s') . ': ' . $message . "\n";
        file_put_contents($logFile, $formattedMessage, FILE_APPEND);
    }
    public function logError(Exception $error) {

    }
    public function logWarning($warning) {

    }
}
$logService = new LogService();
$logService->logMessage("Це повідомлення для журналу");
?>