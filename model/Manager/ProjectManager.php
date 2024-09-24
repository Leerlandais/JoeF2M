<?php

namespace model\Manager;

use model\Abstract\AbstractManager;
use model\Mapping\ProjectMapping;

class ProjectManager extends AbstractManager
{
    public function getRandomProjects(): array|bool
    {
        $query = $this->db->query(
            "SELECT * FROM joe_projects 
                    WHERE joe_proj_vis = 1 
                    ORDER BY RAND()"
        );
        $projects = $query->fetchAll();
        $query->closeCursor();
        $projObject = [];
        foreach ($projects as $project) {
            $projObject[] = new ProjectMapping($project);
        }
        return $projObject;
    }


    public function getAllProjectsByClass(int $limit = 9) : array|bool
    {
        $perClassLimit = intval($limit / 3);

        $stmt = $this->db->prepare(
            "(
            SELECT * FROM joe_projects
            WHERE joe_proj_class = 'aniDig'
            ORDER BY RAND()
            LIMIT $perClassLimit
        ) UNION ALL (
            SELECT * FROM joe_projects
            WHERE joe_proj_class = 'webDes'
            ORDER BY RAND()
            LIMIT $perClassLimit
        ) UNION ALL (
            SELECT * FROM joe_projects
            WHERE joe_proj_class = 'webDev'
            ORDER BY RAND()
            LIMIT $perClassLimit
        )"
        );

        $stmt->execute();
        if ($stmt->rowCount() === 0) return false;

        $data = $stmt->fetchAll();
        $stmt->closeCursor();

        $projObject = [];
        foreach ($data as $project) {
            $projObject[] = new ProjectMapping($project);
        }

        return $projObject;
    }


} // end class