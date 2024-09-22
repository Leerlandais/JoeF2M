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


    public function getAllProjectsByClass($class) : array|bool
    {
        $stmt = $this->db->prepare(
            "SELECT * FROM joe_projects
                    WHERE joe_proj_class = ?
                    ORDER BY RAND()"
        );
        $stmt->execute([$class]);
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