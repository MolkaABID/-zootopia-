<?php
    require_once '../config.php';
    class packageC {

        public function afficherPackage() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM package'
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function getPackageById($id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM package WHERE idPackage = :id'
                );
                $query->execute([
                    'id' => $id
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function getPackageByTitle($title) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM package WHERE  nom = :title'
                );
                $query->execute([
                    'title' => $title
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function addPackage($package) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'INSERT INTO package (`nom`, `localisation`, `date`, `prix`, `type`, `image`, `description`) VALUES (?,?,?,?,?,?,?)'
                );
                $query->execute([
                    ' nom' => $package->getNom(),
                    'prix' => $package->getPrix(),
                    'image' => $package->getImage()
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function updatePackage($package, $id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'UPDATE package SET  nom = : nom, prix = :prix, image = :image WHERE idPackage = :id'
                );
                $query->execute([
                    ' nom' => $package->getNom(),
                    'prix' => $package->getPrix(),
                    'image' => $package->getImage(),
                    'id' => $id
                ]);
                echo $query->rowCount() . " records UPDATED successfully";
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function deletePackage($id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'DELETE FROM package WHERE idPackage = :id'
                );
                $query->execute([
                    'id' => $id
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function rechercherPackage($title) {            
            $sql = "SELECT * from package where nom=:title"; 
            $db = config::getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute([
                    'nom' => $package->getNom(),
                ]); 
                $result = $query->fetchAll(); 
                return $result;
            }
            catch (PDOException $e) {
                $e->getMessage();
            }
        }
        
    }