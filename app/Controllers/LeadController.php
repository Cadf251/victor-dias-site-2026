<?php

namespace App\Controllers;

use App\Models\Lead;
use Cadud\Helpers\Email\Mailer;
use Cadud\Helpers\Support\GenerateLog;
use Exception;
use Rakit\Validation\Validator;

class LeadController
{
  public function create()
  {
    $post = $this->getPostData();

    if ($post === null) {
      $this->failedResponse();
    }

    $validator = new Validator();

    $validation = $validator->make($post, [
      "name" => "required",
      "email" => "required|email",
      "phone" => "required|min:14|max:14",
    ]);

    $validation->validate();

    if ($validation->fails()) {
      $this->failedResponse();
    }

    $lead = Lead::new(
      $post["name"],
      $post["phone"],
      $post["email"],
      $post["type"] ?? "Outros"
    );

    $this->sendLead($lead);

    echo json_encode([
      "success" => true,
      "message" => "Dados recebidos com sucesso."
    ]);
    exit;
  }

  private function getPostData(): ?array
  {
    $post = filter_input_array(INPUT_POST);

    if (!$post || $post === null) {
      return null;
    } else {
      return $post;
    }
  }

  private function sendLead(Lead $lead)
  {
    try {
      $mailer = new Mailer(
        "Novo Lead",
        require TEMPLATES."/partials/lead-email.html",
        "cadu.devmarketing@gmail.com",
        "Cadu Prado",
        [
          "[LEAD_NAME]" => $lead->name,
          "[LEAD_EMAIL]" => $lead->email,
          "[LEAD_PHONE]" => $lead->phone,
          "[LEAD_PROBLEM]" => $lead->type,
          "[LEAD_PHONE_FORMATTED]" => $lead->getPhoneFormatted(),
        ]
      );

      $mailer->send();
    } catch (Exception $e) {
      GenerateLog::log($e);
    }
  }

  private function failedResponse(string $message = "Algo deu errado!"): void
  {
    echo json_encode([
      "success" => false,
      "message" => $message
    ]);
    exit;
  }
}