-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2024 at 10:32 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cs_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pID` int(4) NOT NULL,
  `pName` varchar(100) NOT NULL,
  `pPrice` decimal(8,2) NOT NULL,
  `pQuanlity` int(3) NOT NULL,
  `pType` varchar(50) NOT NULL,
  `pStatus` varchar(50) NOT NULL,
  `pDetail` text NOT NULL,
  `pPhoto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pID`, `pName`, `pPrice`, `pQuanlity`, `pType`, `pStatus`, `pDetail`, `pPhoto`) VALUES
(1, 'Morgan Platform Slide Sandals - Butter', 1990.00, 15, 'รองเท้าแตะ', 'Normal', 'โดดเด่นด้วยแพลตฟอร์มแบบบุนวมหนานุ่ม รองเท้าแตะแบบสวม Morgan ดีไซน์มาให้ความสบายในอีกระดับระหว่างสวมใส่ ผลิตจากวัสดุ EVA ที่จะช่วยยึดเกาะเท้าของคุณไว้ได้อย่างดี ไม่ว่าจะไปเข้าคลาสโยคะและเดทแบบสบายๆ ไปจนถึงใส่อยู่บ้าน รองเท้าคู่นี้เป็นตัวเลือกที่ยอดเยี่ยม คุณอาจจะสวมคู่กับถุงเท้าเพื่อเพิ่มความอบอุ่นหรือเพิ่มลุคคุณหนูสุดแซ่บ', ''),
(2, 'Gladiator Platform Sandals - Chalk', 3190.00, 15, 'รองเท้าส้นสูง', 'Normal', 'ใช้งานได้หลากหลายและหรูหรามีระดับ รองเท้าแตะเสริมแพลตฟอร์มคู่นี้จะทำให้สไตล์แบบส้นหนากลับมาอีกครั้ง โดดเด่นด้วยดีไซน์แบบกรงด้านหน้าและสายรัดข้อเท้าเส้นบาง ส้นที่มั่นคงขนาด 11 ซม. ช่วยเสริมความสูงให้กับคุณโดยที่ไม่เข้าไปลดทอนความสบาย สีชอล์คที่แมตช์ได้กับทุกอย่างทำให้รองเท้าคู่สวยคู่นี้เข้ากับเสื้อผ้าของคุณได้เกือบทุกชุด', ''),
(3, 'รองเท้าผ้าใบผู้ชาย SKATE OLD SKOOL', 3100.00, 20, 'รองเท้าผ้าใบ', 'Normal', 'สร้างสรรค์สไตล์ที่โดดเด่นแบบเฉพาะตัวด้วย รองเท้าผ้าใบจากแบรนด์ VANS มาพร้อมวัสดุที่ทนทานและบางเบา ใส่สบาย', ''),
(11, 'Adidas', 3500.00, 20, 'รองเท้าผ้าใบ', 'Normal', 'สีสวย ใส่สบาย เหมาะสำหรับทุกวัย', 'images.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
