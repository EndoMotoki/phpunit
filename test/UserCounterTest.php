<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/UserCounter.php';

class UserCounterTest extends TestCase
{
    public function test_countUsersが3を返す()
    {
        // PDOStatement をスタブ化
        $stmtStub = $this->createMock(PDOStatement::class);
        $stmtStub->method('fetchColumn')->willReturn(3);

        // PDO をスタブ化
        $pdoStub = $this->createMock(PDO::class);
        $pdoStub->method('query')->willReturn($stmtStub);

        // スタブを注入
        $counter = new UserCounter($pdoStub);

        $this->assertSame(3, $counter->countUsers());
    }
}
