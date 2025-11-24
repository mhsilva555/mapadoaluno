<?php

namespace App\Livewire\Material;

use Livewire\Component;

class Show extends Component
{
    public $materialId;
    public $isFavorite = false;
    public $downloadCount = 1250;
    
    // Share Modal
    public $showShareModal = false;

    // Voting
    public $likes = 45;
    public $dislikes = 2;
    public $userVote = null; // 'like', 'dislike', or null

    // Comments
    public $comments = [];
    public $newComment = '';

    public function mount($id)
    {
        $this->materialId = $id;
        // Mock comments
        $this->comments = [
            ['user' => 'João Paulo', 'avatar' => 'https://ui-avatars.com/api/?name=Joao+Paulo&background=random', 'text' => 'Muito bom! Ajudou demais na P1.', 'date' => '2 dias atrás'],
            ['user' => 'Maria Clara', 'avatar' => 'https://ui-avatars.com/api/?name=Maria+Clara&background=random', 'text' => 'Poderia ter mais exemplos de integrais, mas está ótimo.', 'date' => '5 dias atrás'],
        ];
    }

    public function download()
    {
        $this->downloadCount++;
        // In a real app, this would trigger a file download
        $this->dispatch('notify', 'Download iniciado!');
    }

    public function toggleFavorite()
    {
        $this->isFavorite = !$this->isFavorite;
    }

    public function vote($type)
    {
        if ($this->userVote === $type) {
            // Toggle off
            $this->userVote = null;
            if ($type === 'like') $this->likes--;
            else $this->dislikes--;
        } else {
            // Switch vote
            if ($this->userVote === 'like') $this->likes--;
            if ($this->userVote === 'dislike') $this->dislikes--;
            
            $this->userVote = $type;
            if ($type === 'like') $this->likes++;
            else $this->dislikes++;
        }
    }

    public function postComment()
    {
        $this->validate(['newComment' => 'required|min:3']);
        
        array_unshift($this->comments, [
            'user' => 'Você',
            'avatar' => 'https://ui-avatars.com/api/?name=Voce&background=random',
            'text' => $this->newComment,
            'date' => 'Agora mesmo'
        ]);
        
        $this->newComment = '';
    }

    public function render()
    {
        return view('livewire.material.show')->layout('components.layouts.dashboard');
    }
}
