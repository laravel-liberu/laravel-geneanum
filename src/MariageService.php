<?php

namespace FamilyTree365\Geneanum;

class MariageService extends GeneanumService
{
    /**
     * @return mixed
     * @throws GeneanumException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function search(
        string $_firstNameMale,
        string $_lastNameMale,
        string $_firstNameFemale,
        string $_lastNameFemale,
        int    $_perPage = 100,
        int    $_row = 100,
        int    $_sidx = 100,
        int    $_page = 1,
    ): mixed
    {
        $data = [
            'prenom_homme' => $_firstNameMale,
            'nom_homme' => $_lastNameMale,
            'prenom_femme' => $_firstNameFemale,
            'nom_femme' => $_lastNameFemale,
            'annee_limite' => $_perPage, // 100
            'row' => $_row, // 100
            'sidx' => $_sidx, // 100
            'start' => ($_perPage * $_page) - $_perPage, // 2,
        ];

        return $this->call(self::SEARCH_TYPE['MARIAGE'], $data);
    }
}
