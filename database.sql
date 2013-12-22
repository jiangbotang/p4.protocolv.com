-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 22, 2013 at 08:44 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `protoco1_p4_protocolv_com`
--
CREATE DATABASE IF NOT EXISTS `protoco1_p4_protocolv_com` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `protoco1_p4_protocolv_com`;

-- --------------------------------------------------------

--
-- Table structure for table `plasmids`
--

CREATE TABLE IF NOT EXISTS `plasmids` (
  `plasmid_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  `clone_num` varchar(255) NOT NULL,
  `backbone` varchar(255) NOT NULL,
  `insertion` varchar(255) NOT NULL,
  `cloning_sites` varchar(255) NOT NULL,
  `mammalian_selec` varchar(255) NOT NULL,
  `bacterial_selec` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `source` varchar(255) NOT NULL,
  `additional_info` text NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`plasmid_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `plasmids`
--

INSERT INTO `plasmids` (`plasmid_id`, `name`, `created`, `modified`, `clone_num`, `backbone`, `insertion`, `cloning_sites`, `mammalian_selec`, `bacterial_selec`, `purpose`, `source`, `additional_info`, `user_id`) VALUES
(1, 'pENTR/D-TOPO/RVB1', 1387164523, 1387164523, '1', 'pENTR/D-TOPO', 'RVB1', 'pENTR', '', 'Kan', 'cloning', 'Sanjee', 'full insert seq confirmed by sequencing.', 3),
(2, 'pENTR/D-TOPO/RVB2', 1387164644, 1387164644, '1', 'pENTR/D-TOPO', 'RVB2', 'pENTR', '', 'Kan', 'cloning', 'Sanjee', 'full insert seq confirmed by sequencing.', 3),
(3, 'pENTR/D-TOPO/RVB2', 1387165198, 1387165198, '4', 'pENTR/D-TOPO', 'RVB2', 'pENTR', '', 'Kan', 'cloning', 'Sanjee', 'full insert seq confirmed by sequencing.', 3),
(4, 'pDEST47/RVB1', 1387165292, 1387165292, '5', 'pDEST47', 'RVB1', 'LR', '', 'Amp', 'mammalian expr', 'Jiangbo Tang', 'seq confirmed 5'' ~700bps and the end of 3''; WB confirmed expression of RVB1-GFP fusion.', 3),
(5, 'pDEST47/RVB2', 1387165388, 1387165388, '2', 'pDEST47', 'RVB2', 'LR', '', 'Amp', 'mammalian expr', 'Jiangbo Tang', 'seq confirmed 5'' ~700bps and the end of 3''; WB confirmed expression of RVB2-GFP fusion.', 3),
(6, 'pDEST47/RVB2', 1387659200, 1387659200, '7', 'pDEST47', 'RVB2', 'LR', 'Neo', 'Amp', 'mammalian expr', 'Jiangbo Tang', 'seq confirmed 5'' ~700bps and the end of 3''', 3),
(7, 'pcDNA3-HA/SUMO1', 1387659293, 1387659293, '', 'pcDNA3-HA', 'SUMO1', 'HindIII - SmaI', 'Neo', 'Amp', 'mammalian expr', 'Addgene', 'ref: Terui et al (J Biol Chem. 2004 Jul 2. 279(27):28257-65. ', 3),
(8, 'pSG5/His-SUMO1', 1387659432, 1387659432, '', 'pSG5', 'His-SUMO1', 'BamHI', '', 'Amp', 'eukaryotic expr', 'Addgene', 'ref: Yueh et al (J Virol. 2006 Jan . 80(1):342-52. ', 3),
(9, 'SRa/HA-SUMO2', 1387659503, 1387659503, '', '', 'HA-SUMO2', '', '', 'Amp', 'mammalian expr', 'Addgene', 'ref: Kamitani et al (J Biol Chem. 1998 Feb 6. 273(6):3117-20.', 3),
(10, 'pcDNA3-HA/SUMO3', 1387659554, 1387659554, '', 'pcDNA3-HA', 'SUMO3', 'BamHI - EcoRI', 'Neo', 'Amp', 'mammalian expr', 'Addgene', 'ref: Kamitani et al (J Biol Chem. 1998 Feb 6. 273(6):3117-20.', 3),
(11, 'pCMV/hUbc9-HA', 1387659628, 1387659628, '', 'pCMV4', 'Ubc9-HA', 'BglII - BclI/BglII', '', 'Amp', 'mammalian expr', 'Addgene', 'ref: Yasugi et al (Nucleic Acids Res. 1996 Jun 1. 24(11):2005-10', 3),
(13, 'pENTR/D-TOPO/PALB2 WT', 1387698122, 1387698122, '1', 'pENTR/D-TOPO', 'PALB2 WT', '', '', 'Kan', 'cloning', 'Jiangbo Tang', 'PALB2 WT with start codon (ATG), without stop codon.', 5);

-- --------------------------------------------------------

--
-- Table structure for table `primers`
--

CREATE TABLE IF NOT EXISTS `primers` (
  `primer_id` int(11) NOT NULL AUTO_INCREMENT,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sequence` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `restriction_enzyme` varchar(255) NOT NULL,
  `additional_info` text NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`primer_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `primers`
--

INSERT INTO `primers` (`primer_id`, `created`, `modified`, `name`, `sequence`, `purpose`, `restriction_enzyme`, `additional_info`, `user_id`) VALUES
(1, 1387147238, 1387147238, 'FCERT2_F', 'gaagcactgcagatgacgacgataaat', 'cloning', 'PstI', 'clone FokI-Cre-ERT2 from pHFVW/FokI-Cre-ERT2 into pCMV-Tag 2A', 3),
(2, 1387147975, 1387147975, 'FCERT2_R', 'gaagttaagctttcaagctgtggcagg', 'cloning', 'HindIII', 'clone FokI-Cre-ERT2 from pHFVW/FokI-Cre-ERT2 into pCMV-Tag 2A', 3),
(3, 1387150189, 1387150189, 'pCEPF', 'AGCAGAGCTCGTTTAGTGAACCG', 'sequencing', '', '', 3),
(4, 1387150307, 1387150307, 'pEBVR', 'GTGGTTTGTCCAAACTCATC', 'sequencing', '', '', 3),
(5, 1387150484, 1387150484, 'pOZ-V5F', 'GATCTTCCGCTCGATGAACCATGGGTAAGCCTATCCCTAACCCTCTCCTCGGTCTCGATTCTACGGGAGGAC', 'adaptor', 'BglII/XhoI', 'introduce V5 tag into pOZ vector between BglII and XhoI, and delete the FH tags', 3),
(6, 1387150724, 1387150724, 'pOZ-V5R', 'TCGAGTCCTCCCGTAGAATCGAGACCGAGGAGAGGGTTAGGGATAGGCTTACCCATGGTTCATCGAGCGGAA', 'adaptor', 'BglII/XhoI', 'introduce V5 tag into pOZ vector between BglII and XhoI, and delete the FH tags', 3),
(7, 1387658727, 1387658727, 'pBACH1F', 'ctcGGACTCGAGatgtcttcaatgtgg', 'cloning', 'XhoI', 'clone BACH1 from pCDNA3 to pOZ-FH-N', 3),
(8, 1387658753, 1387658753, 'pBACH1R', 'ttcatcgcggccgcttacttaaaaccagg', 'cloning', 'NotI', 'clone BACH1 from pCDNA3 to pOZ-FH-N', 3),
(9, 1387658792, 1387658792, 'pCtIP_shRF', 'aagccctaactctgcagatacatctagtgactttaaagatctctggacgaagctcaaagaatgtcatgatagagaag', 'mutagenesis', '', 'mutagensis primer to construct shRNA resistant CtIP. shRNA target sequence: G GAC CUU UGG ACA AAA CUA. Mutagenesis of CtIP: A GAU CUC UGG ACG AAG CUC ', 3),
(10, 1387658827, 1387658827, 'pCtIP_shRR', 'cttctctatcatgacattctttgagcttcgtccagagatctttaaagtcactagatgtatctgcagagttagggctt', 'mutagenesis', '', 'mutagensis primer to construct shRNA resistant CtIP. shRNA target sequence: G GAC CUU UGG ACA AAA CUA. Mutagenesis of CtIP: A GAU CUC UGG ACG AAG CUC ', 3),
(11, 1387658868, 1387658868, 'pBACH1_shRF', 'ggacaatgagtctacacttgaagtgacctctttaaaatatagcacgtccccgtacttactggaagcagcaagtca', 'mutagenesis', '', 'mutagensis primer to construct shRNA resistant BACH1. shRNA target sequence: G TAC AGT ACC TCA CCT TAT. Mutagenesis of BACH1: A TAT AGC ACG TCC CCG TAC ', 3),
(12, 1387658893, 1387658893, 'pBACH1_shRR', 'tgacttgctgcttccagtaagtacggggacgtgctatattttaaagaggtcacttcaagtgtagactcattgtcc', 'mutagenesis', '', 'mutagensis primer to construct shRNA resistant BACH1. shRNA target sequence: G TAC AGT ACC TCA CCT TAT. Mutagenesis of BACH1: A TAT AGC ACG TCC CCG TAC ', 3),
(13, 1387694989, 1387694989, 'pPALB2_L21AF', 'gctgtgaggagaaggaaaagttaaaggagaaagcagcattcttgaaaaggg', 'mutagenesis', '', 'mutagenesis PALB2 L21A. TTA->GCA', 5),
(14, 1387695207, 1387695207, 'pPALB2_L21AR', 'cccttttcaagaatgctgctttctcctttaacttttccttctcctcacagc', 'mutagenesis', '', 'mutagenesis PALB2 L21A. TTA->GCA', 5),
(15, 1387695273, 1387695273, 'pPALB2_Y28AF', 'ggagaaagcagcattcttgaaaagggaagccagcaagacactagc', 'mutagenesis', '', 'mutagensis PALB2 Y28A. TAC->GCC. For making double or triple mutant of PALB2 (L21A, Y28A, L35A), use the other two sets of primers first, because this set of primers extend to the L21 codon. L21A mutations have been introduce in the primers.', 5),
(16, 1387695473, 1387695473, 'pPALB2_Y28AR', 'gctagtgtcttgctggcttcccttttcaagaatgctgctttctcc', 'mutagenesis', '', 'mutagenesis PALB2 Y28A. TAC->GCC.', 5),
(17, 1387695619, 1387695619, 'pPALB2_L35AF', 'aagacactagcccgcgctcagcgtgcccaaag', 'mutagenesis', '', 'mutagenesis PALB2 L35A. CTT->GCT.', 5),
(18, 1387695803, 1387695803, 'pPALB2_L35AR', 'ctttgggcacgctgagcgcgggctagtgtctt', 'mutagenesis', '', 'mutagenesis PALB2 L35A. CTT->GCT.', 5);

-- --------------------------------------------------------

--
-- Table structure for table `sirnas`
--

CREATE TABLE IF NOT EXISTS `sirnas` (
  `sirna_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `target_gene` varchar(255) NOT NULL,
  `target_region` varchar(255) NOT NULL,
  `target_seq` varchar(255) NOT NULL,
  `sirna_seq` varchar(255) NOT NULL,
  `additional_info` text NOT NULL,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`sirna_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `sirnas`
--

INSERT INTO `sirnas` (`sirna_id`, `name`, `target_gene`, `target_region`, `target_seq`, `sirna_seq`, `additional_info`, `created`, `modified`, `user_id`) VALUES
(1, 'siPALB2_3UTR', 'PALB2', '3''UTR', 'GGAGAATATCTGAATGACA', 'GGAGAAUAUCUGAAUGACAdTdT', 'Zhang 2009 MCR', 1387169535, 1387169535, 3),
(2, 'siWRNIP1_ORF1', 'WRNIP1', 'ORF', 'GCATAAGGTTTGTGACATT', 'GCAUAAGGUUUGUGACAUUdTdT', 'designed by Invitrogen Block-iT', 1387169635, 1387169635, 3),
(3, 'siWRNIP1_3UTR1', 'WRNIP1', '3''UTR', 'GGAAGTTAGAACAGACCAA', 'GGAAGUUAGAACAGACCAAdTdT', 'designed by Invitrogen Block-iT', 1387169663, 1387169663, 3),
(4, 'siRVB1_ORF1', 'RVB1', 'ORF', 'TAAAGGAGACCAAGGAAGT', 'UAAAGGAGACCAAGGAAGUdTdT', 'Jha 2008 MCB', 1387169738, 1387169738, 3),
(5, 'siRVB1_3UTR1', 'RVB1', '3''UTR', 'CTCTCTCTCTCTCTCTCTA', 'CUCUCUCUCUCUCUCUCUAdTdT', 'Jha 2008 MCB, with modification to meet the NCBI ref sequence', 1387169771, 1387169771, 3),
(6, 'siTIP60_ORF1', 'TIP60', 'ORF', 'TGATCGAGTTCAGCTATGA', 'UGAUCGAGUUCAGCUAUGAdTdT', 'Jha 2008 MCB', 1387169804, 1387169804, 3),
(7, 'siTRRAP', 'TRRAP', '', 'AATGGCTCGAAAGGAATGG', 'AAUGGCUCGAAAGGAAUGGdTdT', 'Murr R 2006 Nature Cell Biology. Does not KD TRRAP as tested by qPCR and WB.', 1387661360, 1387661360, 3),
(8, 'siAbraxas', 'abraxas', '', 'CGTTTAGAGAGAGGCTGCTTCACAA', 'CGUUUAGAGAGAGGCUGCUUCACAA', 'seq from Kara Coleman', 1387661385, 1387661385, 3),
(9, 'siBRCA1', 'BRCA1', '', 'agatagttctaccagtaaa', 'agauaguucuaccaguaaa', 'seq from Kara seq from Kara ColemanColeman', 1387661439, 1387661439, 3),
(10, 'siHDAC1', 'HDAC1', '', 'CAGCGACTGTTTGAGAACC', 'CAGCGACUGUUUGAGAACCdTdT', 'Miller KM 2010', 1387661462, 1387661462, 3),
(11, 'siHDAC2', 'HDAC2', '', 'GCGGATAGCTTGTGATGAA', 'GCGGAUAGCUUGUGAUGAAdTdT', 'Miller KM 2010', 1387661480, 1387661480, 3),
(12, 'siMMSET', 'MMSET', 'SET domain', 'AATGTCCTTGGCATCATTG', 'AAUGUCCUUGGCAUCAUUG', 'Jose L.R. Brito 2009 with modifications. Original "GGGAATGTCCTTGGCATCATTGTGA" 25bps', 1387661505, 1387661505, 3),
(13, 'siTIP60m', 'mTIP60', 'ORF', 'TTATTGAGTTCAGCTATGA', 'UUAUUGAGUUCAGCUAUGA', 'same position as the human TIP60 siRNA (si006), seq are dif at 2 bases', 1387698823, 1387698823, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` int(11) NOT NULL,
  `timezone` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `created`, `modified`, `token`, `password`, `last_login`, `timezone`, `first_name`, `last_name`, `email`) VALUES
(2, 1386790815, 1386790815, 'c01f1ff3a3e33bbe017844bb6cc04d1d22aa3924', '56d1c31698b4032a43962db09b6ae6de64a1dea9', 0, '', 'Jiangbo', 'Tang', 'jiangbo.tang@gmail.com'),
(3, 1386790895, 1386790895, 'd499834ca970360812fe6e3532189fb303a3e347', '56d1c31698b4032a43962db09b6ae6de64a1dea9', 0, '', 'Jiangbo', 'Tang', 'jtang@gmail.com'),
(4, 1386791091, 1386791091, '5b6afb0e14368382e0dfa38ebe830bdaa4857b90', '56d1c31698b4032a43962db09b6ae6de64a1dea9', 0, '', 'Claire', 'Tang', 'ctang@gmail.com'),
(5, 1387692250, 1387692250, '570bce6ef977fc0ccaaf45616702691e385f6eee', 'eda73c17e104ec9e5d03ece9b337d3a95518d6fe', 0, '', 'Qi', 'Yang', 'qyang@gmail.com'),
(6, 1387692441, 1387692441, 'f1ab74d3144aa405d612d531780fe254c3d57c15', 'eda73c17e104ec9e5d03ece9b337d3a95518d6fe', 0, '', 'Sam', 'Kirkland', 'skirkland@aol.com');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `plasmids`
--
ALTER TABLE `plasmids`
  ADD CONSTRAINT `plasmids_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `primers`
--
ALTER TABLE `primers`
  ADD CONSTRAINT `primers_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `sirnas`
--
ALTER TABLE `sirnas`
  ADD CONSTRAINT `sirnas_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
