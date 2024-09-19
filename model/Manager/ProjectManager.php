<?php

namespace model\Manager;

use model\Abstract\AbstractManager;
use model\Mapping\ProjectMapping;

class ProjectManager extends AbstractManager
{
    public function getRandomProjects($limit = 9): array|bool
    {
        $query = $this->db->query(
            "SELECT * FROM joe_projects WHERE joe_proj_vis = 1 ORDER BY RAND() LIMIT {$limit}"
        );
        $projects = $query->fetchAll();
        $query->closeCursor();
        $projObject = [];
        foreach ($projects as $project) {
            $projObject[] = new ProjectMapping($project);
        }
        return $projObject;
    }



} // end class