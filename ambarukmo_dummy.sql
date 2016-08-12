-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Aug 11, 2016 at 09:38 AM
-- Server version: 5.5.42
-- PHP Version: 5.5.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ambarukmo`
--

-- --------------------------------------------------------

--
-- Table structure for table `dummy`
--

CREATE TABLE `dummy` (
  `no` varchar(3) DEFAULT NULL,
  `COL 2` varchar(107) DEFAULT NULL,
  `COL 3` varchar(23) DEFAULT NULL,
  `COL 4` varchar(8) DEFAULT NULL,
  `COL 5` varchar(98) DEFAULT NULL,
  `name` varchar(28) DEFAULT NULL,
  `afiliasi` varchar(73) DEFAULT NULL,
  `email` varchar(32) DEFAULT NULL,
  `check_in_status` varchar(255) NOT NULL,
  `time_check_in` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dummy`
--

INSERT INTO `dummy` (`no`, `COL 2`, `COL 3`, `COL 4`, `COL 5`, `name`, `afiliasi`, `email`, `check_in_status`, `time_check_in`) VALUES
('1', 'Channel Correlation Based Zero-Forcing Beamforming in Two-User MISO Broadcast Channel', 'Wireless', 'accepted', 'Wireless Signal Processing; Wireless System; MIMO', 'Jing Xu ', 'Xi''an Jiaotong University, P.R. China', 'jing.xu@mail.xjtu.edu.cn', 'Approved', '08/11/2016 02:10:46 pm'),
('2', 'Loss-tolerant Large-scale MU-MIMO System with Rateless Space Time Block Code', 'Wireless', 'accepted', 'Wireless System; MIMO', 'Ali H. Alqahtani ', 'College of Telecommunication and Information (CTI), Saudi Arabia', 'aqahtani@cti.edu.sa', 'Approved', '08/11/2016 01:18:10 pm'),
('3', 'Monopole-Like Meander Microstrip Antenna Onboard Microsatellite for Telecommand Applications', 'Wireless', 'accepted', 'Antenna and Propagation', 'Nayla Najati', 'Indonesian National Institute of Aeronautics and Space (LAPAN), Indonesia', 'nayla.najati@lapan.go.id', '', ''),
('4', 'Joint Decoding for Multiway Multirelay Networks with Coded Random Access', 'Wireless', 'accepted', 'Wireless Signal Processing; Wireless System', 'Mohammad Nur Hasan', 'Japan Advanced Institute of Science and Technology, Japan', 'hasan-mn@jaist.ac.jp', '', ''),
('5', 'Data Location Aware Scheduling for Virtual Hadoop Cluster Deployment on Private Cloud Computing Environment', 'Cloud Computing and IoT', 'accepted', 'Architecture of cloud computing; Cloud interoperability; Infrastructure as a Service (IaaS)', 'Asmath Fahad Thaha', 'Multimedia University, Malaysia', 'asmathfahad@gmail.com', '', ''),
('6', 'Study on Protocol and Required Bandwidth for 5G Mobile Fronthaul in C-RAN Architecture with MAC-PHY Split', '4G Enhancement and 5G', 'accepted', 'Radio Access Network for 4G/5G', 'Susumu Nishihara ', 'NTT Access Network Service Systems Laboratories, Japan', 'nishihara.susumu@lab.ntt.co.jp', '', ''),
('7', 'Random Linear Fountain Code with Improved Decoding Success Probability', '4G Enhancement and 5G', 'accepted', 'Radio Access Network for 4G/5G', 'Jalaluddin Qureshi ', 'Namal College, Pakistan', 'j.qureshi@namal.edu.pk', '', ''),
('8', 'Cross Layered Adaptive Cooperative Routing Model in Mobile Ad Hoc Networks', 'Networks', 'accepted', 'MAC for mesh, ad hoc, relay, and sensor networks; PHY layer design for ad hoc, and sensor networks', 'Mahadev Anant Gawas ', 'Bits, India', 'mahadev@goa.bits-pilani.ac.in', '', ''),
('9', 'Selection Model Based on Multi-Objective Evolutionary Algorithm for Coordinated Multi Point Schemes', '4G Enhancement and 5G', 'accepted', 'Radio Access Network for 4G/5G', 'Carlos Andres Lozano-Garzon ', 'Universidad de Los Andes &amp; Universitat de Girona, Colombia', 'calozanog@ieee.org', '', ''),
('10', 'On the Implementation of Path-Based Dynamic Pricing in Edge-Directed Routing', 'Networks', 'accepted', 'Network Architecture and Protocol; Future Network', 'Jumpei Urakawa ', 'KDDI R&amp;D Laboratories, Inc., Japan', 'ju-urakawa@kddilabs.jp', '', ''),
('11', 'Benchmarking of Real-Time LTE Network in Dynamic Environment', 'Wireless', 'accepted', 'Wireless System', 'Ramprasad Subramanian ', 'University of Technology Sydney, Australia', 'ramprasad.subramanian@uts.edu.au', '', ''),
('12', 'New Four-State Space-Time Trellis Codes for Multi-pair Two-way Relaying in MIMO Cooperative Networks', 'Wireless', 'accepted', 'Wireless System; MIMO', 'Yunida Yunida', 'Syiah Kuala University, Indonesia', 'yunida91@mhs.unsyiah.ac.id', '', ''),
('13', 'Design of WLAN Based System for Fast Protocol Factory Automation System', 'Wireless', 'accepted', 'Wireless System', 'Astri Maria Kurniawati ', 'Kyushu Institute of Technology, Japan', 'astri@dsp.cse.kyutech.ac.jp', '', ''),
('14', 'DNS with Mapping Service in Identifier Locator Split Architecture', 'Networks', 'accepted', 'Network Architecture and Protocol; Future Network', 'Bin Da', 'Beijing Huawei Digital Technologies Co., Ltd., P.R. China', 'binda@live.cn', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
