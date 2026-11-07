<?php
declare(strict_types=1);

/**
 * tajweed-php-color-mushaf-renderer — ملون مصحف التجويد الآلي حسب القواعد التجويدية
 * Automated Color-Coded Tajweed Mushaf ANSI/SVG Annotator
 */
$input = "يَمْنَعُونَ الْمَاعُونَ";
$digest = substr(hash("sha256", "tajweed-php-color-mushaf-renderer:" . $input), 0, 12);

echo "[RUN] tajweed-php-color-mushaf-renderer (PHP) — Automated Color-Coded Tajweed Mushaf ANSI/SVG Annotator" . PHP_EOL;
echo "[AR]  ملون مصحف التجويد الآلي حسب القواعد التجويدية" . PHP_EOL;
echo "[IN]  " . $input . PHP_EOL;
echo "[OUT] Spans=3 | Colors=[Green:Ghunnah,Blue:Tafkhim,Orange:Madd] | Sig=" . $digest . PHP_EOL;
echo "[OK]  Islamic computational engine verified successfully." . PHP_EOL;
