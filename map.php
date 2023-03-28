<?php

class admin{
    private $id_admin;
    private $nom;
    private $prenom;
    private $identifiant_admin;
    private $mdp_etudiant;

    public getIDadmin(){
        return $this->$id_admin;
    }
    public setIDadmin($ID){
        if($ID>0){        
             $this->$id_admin=$ID;
        }
    }

    public getNom(){
        return $this->$nom;
    }
    public setNom($Nom){
        if($Nom!=""){        

         $this->$nom=$Nom;
        }
    }

    public getPrenom(){
        return $this->$prenom;
    }
    public setPrenom($Prenom){
        if($prenom!=""){        

         $this->$prenom=$Prenom;
        }
    }

    public getIdentifiantadmin(){
        return $this->$identifiant_admin;
    }
    public setIdentifiant($identifiant_admin){
        if($Identifiantadmin!=""){        

         $this->$identifiant_admin=$Identifiantadmin;
        }
    }

    public getMDPadmin(){
        return $this->$mdp;
    }
    public setMDPadmin($MDPadmin){
        if ($MDPadmin!=""){
        $this->$mdp_admin=$MDPadmin;
        }
    }

}

class candidature{
    private $id_etudiant;
    private $id_offre;

    public getIDetudiant(){
        return $this->$id_etudiant;
    }
    public setIDetudiant($IDetudiant){
        if($IDetudiant>0){        
            $this->$id_etudiant=$IDetudiant;
        }
    }

    public getIDoffre(){
        return $this->$id_offre;
    }
    public setIDoffre($IDoffre){
        if($IDoffre>0){
            $this->$id_offre=$IDoffre;
        }
    }

}

class centre{
    private $id_centre;
    private $nom_centre;

    public getIDcentre(){
        return $this->$id_centre;
    }
    public setIDcentre($IDcentre){
        if($IDcentre>0){
            $this->$id_centre=$IDcentre;
        }
    }

    public getNomcentre(){
        return $this->$nom_centre;
    }
    public setNomcentre($Nomcentre){
        if($Nomcentre!=""){
            $this->$nom_centre=$Nomcentre;
        }
    }
}

class confiance{
    private $id_pilote;
    private $id_confiance;
    private $pourcentage;

    public getIDpilote(){
        return $this->$id_pilote;
    }
    public setIDpilote($IDpilote){
        if($IDpilote>0){
            $this->$id_pilote=$IDpilote;
        }
    }

    public getIDconfiance(){
        return $this->$id_confiance;
    }
    public setIDconfiance($IDconfiance){
        if($IDconfiance>0){
            $this->$id_confiance=$IDconfiance;
        }
    }

    public getPourcentange(){
        return $this->$pourcentage;
    }
    public setPourcentage($Pourcentage){
        if ($Pourcentage>=0){
            $this->$pourcentage=$Pourcentage;
        }
    }

}

class entreprise{
    private $id_entreprise;
    private $nom_entreprise;
    private $secteur;
    private $n_etudiant;

    public getIDentreprise(){
        return $this->$id_entreprise;
    }
    public setIDentreprise($IDentreprise){
        if ($IDentreprise>0){
            $this->$id_entreprise=$IDentreprise;
        }
    }

    public getNOMentreprise (){
        return $this->$nom_entreprise;
    }
    public setNOMentreprise($NOMentreprise){
        if($NOMentreprise!=""){
            $this->$nom_entreprise=$NOMentreprise;
        }
    }

    public getSecteur(){
        return $this->$secteur;
    }
    public setSecteur(){
        if($Secteur!=""){
            $this->$secteur=$Secteur;
        }
    }

    public getNetudiant(){
        return $this->$n_etudiant;
    }
    public setNetudiant(Netudiant){
        if($Netudiant!=""){
            $this->n_etudiant=$Netudiant;
        }
    }

}

class etudiant{
    private $id_etudiant;
    private $nom_etudiant;
    private $prenom_etudiant;
    private $centre;
    private $promo;
    private $identifiant_etudiant;
    private $mdp_etudiant;
    private $id_pilote;
    private $id_centre;

    public getIDetudiant(){
        return $this->$id_etudiant;
    }
    public setIDetudiant($IDetudiant){
        if($IDetudiant>0){
            $this->$id_etudiant=$IDetudiant;
        }
    }

    public getNOMetudiant(){
        return $this->$nom_etudiant;
    }
    public setNOMetudiant($NOMetudiant){
        if($NOMetudiant!=""){
            $this->$nom_etudiant=$NOMetudiant;
        }
    }

    public getPRENOMetudiant(){
        return $this->$prenom_etudiant;
    }
    public setPRENOMetudiant($PRENOMetudiant){
        if($PRENOMetudiant!=""){
            $this->$prenom_etudiant=$PRENOMetudiant;
        }
    }

    public getCentre(){
        return $this->$centre;
    }
    public setCentre($Centre){
        if($Centre!=""){
            $this->$centre=$Centre;
        }
    }

    public getPromo(){
        return $this->$promo;
    }
    public setPromo($Promo){
        if($Promo!=""){
            $this->$promo=$Promo;
        }
    }

    public getIDENTIFIANTetudiant(){
        return $this->$identifiant_etudiant;
    }
    public setIDENTIFIANTetudiant($IDENTIFIANTetudiant){
        if($IDENTIFIANTetudiant!=""){
            $this->$identifiant_etudiant=$IDENTIFIANTetudiant;
        }
    }

    public getMDPetudiant(){
        return $this->$mdp_etudiant;
    }
    public setMDPetudiant($MDPetudiant){
        if($MDPetudiant!=""){
            $this->$mdp_etudiant=$MDPetudiant;
        }
    }

    public getIDpilote(){
        return $this->$id_pilote;
    }
    public setIDpilote($IDpilote){
        if($ID>0){
            $this->$id_pilote=$IDpilote;
        }
    }

    public getIDcentre(){
        return $this->$id_centre;
    }
    public setIDcentre($IDcentre){
        if($IDcentre>0){
            $this->$id_centre=$IDcentre;
        }
    }
}

class evaluer{
    private $id_evaluation;
    private $id_etudiant;
    private $etoiles;

    public getIDevaluation(){
        return $this->$id_evaluation;
    }
    public setIDevaluation($IDevaluation){
        if($IDevaluation>0){
            $this->$id_evaluation=$IDevaluation;
        }
    }

    public getIDetudiant(){
        return $this->$id_etudiant;
    }
    public setIDetudiant($IDetudiant){
        if($IDetudian>0){
            $this->$id_etudiant=$IDetudiant;
        }
    }

    public getEtoiles(){
        return $this->$etoiles;
    }
    public setEtoiles($Etoiles){
        if($Etoiles>=0){
            $this->$etoiles=$Etoiles;
        }
    }

}

class localite{
    private $id_localite;
    private $adresse;
    private $id;

    public getIDlocalite(){
        return $this->$id_localite;
    }
    public setIDlocalite($IDlocalite){
        if($IDlocalite>0){
            $this->$id_localite=$IDlocalite;
        }
    }

    public getAdresse(){
        return $this->$adresse;
    }
    public setAdresse($Adresse){
        if($Adresse!=""){
            $this->$adresse=$Adresse;
        }
    }

    public getID(){
        return $this->$id
    }
    public setID($ID){
        if($ID>0){
            $this->$id=$ID
        }
    }
}

class offrestage{
    private $id_offre;
    private $competence;
    private $localite;
    private $duree_stage;
    private $base_remuneration;
    private $places;
    private $date;
    private $id;

    public getIDoffre(){
        return $this->$id_offre;
    }
    public setIDoffre($IDoffre){
        if($IDoffre>0){
            $this->$id_offre=$IDoffre;
        }
    }

    public getCompetence(){
        return $this->$competence;
    }
    public setCompetence($Competence){
        if($Competence!=""){
            $this->$competence=$Competence;
        }
    }

    public getLocalite(){
        return $this->$localite;
    }
    public setLocalite($Localite){
        if($Localite!=""){
            $this->$localite=$Localite;
        }
    }

    public getDureestage(){
        return $this->$duree_stage;
    }
    public setDureestage($Dureestage){
        if($Dureestage>0){
            $this->$duree_stage=$Dureestage;
        }
    }

    public getBaseremuneration(){
        return $this->$base_remuneration;
    }
    public setBaseremuneration($Baseremuneration){
        if($Baseremuneration>0){
            $this->$base_remuneration=$Baseremuneration;
        }
    }

    public getPlaces(){
        return $this->$places;
    }
    public setPlaces($Places){
        if($Places>=0){
            $this->$places=$Places;
        }
    }

    public getDate(){
        return $this->$date;
    }
    public setDate($Date){
        if($Date!=""){
            $this->$date=$Date;
        }
    }

    public getID(){
        return $this->$id;
    }
    public setID($ID){
        if($ID>0){
            $this->$id=$ID;
        }
    }

}

class pilote{
    private $id_pilote;
    private $nom_pilote;
    private $prenom_pilote;
    private $centre;
    private $promo;
    private $identifiant_pilote;
    private $mdp_pilote;
    private $id_centre;

    public getIDpilote(){
        return $this->$id_pilote;
    }
    public setIDpilote($IDpilote){
        if($ID>0){
            $this->$id_pilote=$IDpilote;
        }
    }

    public getNOMpilote(){
        return $this->$nom_pilote
    }
    public setNOMpilote($NOMpilote){
        if($NOMpilote!=""){
            $this->$nom_pilote=$NOMpilote
        }
    }

    public getPRENOMpilote(){
        return $this->$prenom_pilote
    }
    public setPRENOMpilote($PRENOMpilote){
        if($PRENOMpilote!=""){
            $this->$prenom_pilote=$PRENOMpilote
        }
    }

    public getCentre(){
        return $this->$centre
    }
    public setCentre($Centre){
        if($Centre!=""){
            $this->$centre=$Centre
        }
    }

    public getPromo(){
        return $this->$promo
    }
    public setPromo($Promo){
        if($Promo!=""){
            $this->$promo=$Promo
        }
    }

    public getIDENTIFIANTpilote(){
        return $this->$identifiant_pilote
    }
    public setIDENTIFIANTpilote($IDENTIFIANTpilote){
        if($IDENTIFIANTpilote!=""){
            $this->$identifiant_pilote=$IDENTIFIANTpilote
        }
    }

    public getMDPpilote(){
        return $this->$mdp_pilote
    }
    public setMDPpilote($MDPpilote){
        if($MDPpilote!=""){
            $this->$mdp_pilote=$MDPpilote
        }
    }

    public getIDcentre(){
        return $this->$id_centre;
    }
    public setIDcentre($IDcentre){
        if($IDcentre>0){
            $this->$id_centre=$IDcentre;
        }
    }
}

class wishlist{
    private $id_etudiant;
    private $id_offre;

    public getIDetudiant(){
        return $this->$id_etudiant
    }
    public setIDetudiant($IDetudiant){
        if($IDetudiant>0){
            $this->$id_etudiant=$id_offre
        }
    }

    public getIDoffre(){
        return $this->$id_offre
    }
    public setIDoffre($IDoffre){
        if($IDoffre>0){
            $this->$id_offre=$IDoffre
        }
    }
}

?>