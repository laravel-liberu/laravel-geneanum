<?php

namespace FamilyTree365\Geneanum;

class BurialsService extends GeneanumService
{
    /**
     * @return mixed
     * @throws GeneanumException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function search(
        string $_firstName,
        string $_lastName,
        int    $_perPage = 100,
        int    $_row = 100,
        int    $_sidx = 100,
        int    $_page = 1,
    ): mixed
    {
        $data = [
            'prenom' => $_firstName,
            'nom' => $_lastName,
            'annee_limite' => $_perPage, // 100
            'row' => $_row, // 100
            'sidx' => $_sidx, // 100
            'start' => ($_perPage * $_page) - $_perPage, // 2,
        ];

        return $this->call(self::SEARCH_TYPE['BURIALS'], $data);
    }
}
