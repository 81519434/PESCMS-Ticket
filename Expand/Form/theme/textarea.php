<textarea rows="5" name="<?= $field['field_name'] ?>" class="form-textarea am-radius" <?= $field['field_required'] == '1' ? 'required' : '' ?> placeholder="<?= !empty($field['field_explain']) ? $field['field_explain'] : $field['field_display_name'] ?>" ><?= $field['value'] ?></textarea>