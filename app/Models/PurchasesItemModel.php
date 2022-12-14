<?php

namespace App\Models;

use CodeIgniter\Model;

class PurchasesItemModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'purchasesitems';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['purchases_id','drug_id'.'quantity','price','sub_total'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function get_data_by_purchase($purchase_id){
        $query = $this->where('purchase_id', $purchase_id);
        $query = $this->join('items', 'items.id = purchase_items.item_id');
        $query = $this->select(
            'purchase_items.*, items.name AS item_name'
        );
        return $query->get()->getResult();
    }

    public function create_data($params){
        $subtotal = $params->getVar('quantity') * $params->getVar('price');
        $data = [
            'purchase_id' => $params->getVar('purchase_id'),
            'item_id' => $params->getVar('item_id'),
            'quantity' => $params->getVar('quantity'),
            'price' => $params->getVar('price'),
            'subtotal' => $subtotal
        ];
        return $this->save($data);
    }
}
